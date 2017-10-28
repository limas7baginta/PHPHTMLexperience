<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/foundation.min.js"></script>
<script src="assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="assets/js/vendor/dataTables.foundation.js"></script>
<script type="text/javascript" charset="utf-8">
	$(document).foundation({
		abide: {
            patterns: {
                password: /^(.){8,}$/
            },
            timeout : 500
        }
	});
	$(document).ready(function(){
		$('#userdata').dataTable({
			autoWidth: true
		});
		$('.entrylink').click(function(){
			$('#newentry').show();
			$('#newsearch').hide();
		});
		$('.searchlink').click(function(){
			$('#newsearch').show();
			$('#newentry').hide();
		});
		$('.collapse').click(function(){
			$('#newentry').hide();
			$('#newsearch').hide();		
			$('#edit').hide();				
		});
	});
	function edit(value)
	{
		$(document).ready(function(){
			$('#edit').show();
			$('.editform input[name=npm]').val(value);
		});
	}	
</script>
</html>