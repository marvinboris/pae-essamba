        <footer class="py-3 px-5 bg-light h5 m-0 font-weight-700 text-tree">
            All rights reserved. By <span class="text-pink">briluce</span>
        </footer>
    </section>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
        $(function () {
            $('#messages-controller').click(function () {
                if ($('#notifications').hasClass('show') || $('#menu').hasClass('show')) $('#notifications, #menu').removeClass('show');
            });
            $('#notifications-controller').click(function () {
                if ($('#messages').hasClass('show') || $('#menu').hasClass('show')) $('#messages, #menu').removeClass('show');
            });
            $('#menu-controller').click(function () {
                if ($('#messages').hasClass('show') || $('#notifications').hasClass('show')) $('#messages, #notifications').removeClass('show');
            });
        });
    </script>

    @yield('scripts')
</body>
</html>