<h2>Extemporaneous Conference Calling</h2>
<p>Enter two or more telephone numbers and submit the form.  Each number will be called and, if they pick up, will be bridged to a conference.</p>
<form method="get" id="theForm" action="/api/bridge">
    <div id="numbersContainer">
        <div><input name="numbers[]" class="input" type="text" /><br/></div>
        <div><input name="numbers[]" class="input" type="text" /><br/></div>
    </div>
    <br/><br/><input type="submit" /> &nbsp; <i class="fa fa-plus"></i>
</form>
<script>
    $(document).ready(function(){
        $('.fa-plus').on('click', function(){
            $('input:text:first').parent().clone().appendTo('#numbersContainer').find("input[type='text']").val("");
        });
    });
</script>
