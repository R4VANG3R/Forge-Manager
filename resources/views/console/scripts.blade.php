<script type="text/javascript">
    $(document).ready(function() {
        resizeConsole();
        $(window).resize(resizeConsole);
    });

    function resizeConsole() {
        var height = $(window).height() - 119;
        $('#console').height(height);
    }
</script>
