<img height="1" width="1" src="https://www.facebook.com/tr?id=<?=$_GET['pixel'];?>&ev=Lead&noscript=1" />



1. Піксель, який має трекатися по кліку на кнопку/лінкудодати у <head>

<script>
    ! function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', <?= $_GET['pixel'];?>);
</script>



2. додати перед </body>

<script>
    function onClick() {
        fbq('track', 'Lead');
    };
    
</script>


3. додати на лінк/кнопку


onClick="onClick()"