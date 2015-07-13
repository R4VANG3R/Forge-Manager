{{-- HTML ready --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="collapse"]').click(function(e){
            $('section.main-content').add('nav.sidebar').toggleClass("collapsed");
        });
    });
</script>