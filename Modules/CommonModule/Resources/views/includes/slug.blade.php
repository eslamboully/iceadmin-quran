<script src="{{asset('assets/admin/bower_components/speaking-url/speakingurl.min.js')}}">

<script>
  $(document).ready(function () {
    $('#countTitleLettrs').keyup(function() {
      // append them to a span
      $('#titleSpan').text('Number of Characters ' + this.value.length).css('color', 'green');
    })

    $('#countDescLettrs').keyup(function() {
      // append them to a span
      $('#descSpan').text('Number of Characters ' + this.value.length).css('color', 'green');
    })

    $('#countKeyWords').keyup(function() {
      // append them to a span
      $('#tagsSpan').text('Number of Characters ' + this.value.length).css('color', 'green');
    })
  });

</script>




@foreach ($activeLang as $lang)

<script>
    // Copy written
    $(document).ready(function () {

        // Title  =>  Meta title.
        $("#title_{{ $lang->lang }}").on("input", function () {
            $("#meta_title_{{ $lang->lang }}").val(this.value);
        });

        // Title => slug
        $("#title_{{ $lang->lang }}").keyup(function () {
            var Text = $(this).val();

            var slug = getSlug(Text);

            $("#slug_{{ $lang->lang }}").val(slug);

        });

        // count meta title letters
        $('#meta_title_{{ $lang->lang }}').keyup(function() {
            // append them to a span
            $('#titleSpan_{{ $lang->lang }}').text('Number of Characters ' + this.value.length).css('color', 'green');
        })

        // count meta desc letters
        $('#meta_desc_{{ $lang->lang }}').keyup(function() {
            // append them to a span
            $('#descSpan_{{ $lang->lang }}').text('Number of Characters ' + this.value.length).css('color', 'green');
        })





    });
</script>

@endforeach
