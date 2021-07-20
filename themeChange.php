<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset-"UTF-8">
</head>
<body>
    <div style="text-align:right;margin-right:2%">
        <div class="custom-control custom-switch">
            <input type="checkbox" name="theme" class="custom-control-input" id="darkSwitch">
            <label class="custom-control-label con-switch" for="darkSwitch">Light / Dark Switch</label>
        </div>
    </div>
    <!-- javasvript untuk membuat light or dark theme di home -->
    <script type="text/javascript">
        var checkbox = document.querySelector('input[name=theme]');

        checkbox.addEventListener('change', function() {
            if(this.checked) {
                trans()
                document.documentElement.setAttribute('data-theme', 'dark')
            } else {
                trans()
                document.documentElement.setAttribute('data-theme', 'light')
            }
        })


        let trans = () => {
            document.documentElement.classList.add('transition');
            window.setTimeout(() => {
                document.documentElement.classList.remove('transition')
            }, 1000)
        }
    </script>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>