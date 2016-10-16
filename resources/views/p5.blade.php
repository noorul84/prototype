@extends('layouts.app')

@section('content')


{{ Form::open(array('role'=>'form')) }}
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Result</div>

				<div class="panel-body">


					<table class="table">
						<tr>
							<td colspan="3"><strong>Project Name: </strong>{{ session()->get('project') }}</td>
						</tr>
						<tr>
							<td><div><strong>Attributes</strong></div></td>
							<td><div><strong>Mean</strong></div></td>
							<td><strong>Status</strong></td>
						</tr>
						<tr>
							<td><div>Content</div></td>
							<td><div>{{ number_format($a1, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($a1) }}</div></td>
						</tr>
						<tr>
							<td><div>Accuracy</div></td>
							<td><div>{{ number_format($a2, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($a2) }}</div></td>
						</tr>
						<tr>
							<td><div>Format</div></td>
							<td><div>{{ number_format($a3, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($a3) }}</div></td>
						</tr>
						<tr>
							<td><div>Ease of Use</div></td>
							<td><div>{{ number_format($a4, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($a4) }}</div></td>
						</tr>
						<tr>
							<td><div>Timeliness</div></td>
							<td><div>{{ number_format($a5, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($a5) }}</div></td>
						</tr>
						<tr>
							<td><strong>END USER COMPUTING SATISFACTION</strong></td>
							<td><div><strong>{{ number_format($ax, 2) + 0 }}</strong></div></td>
							<td><div><strong>{{ \App\Survey::LabelName($ax) }}</strong></div></td>
						</tr>
						<tr><td colspan="3">&nbsp;</td></tr>





						<tr>
							<td><div><strong>Attributes</strong></div></td>
							<td><div><strong>Mean</strong></div></td>
							<td><div><strong>Status</strong></div></td>
						</tr>
						<tr>
							<td><div>Task Portal Fit</div></td>
							<td><div>{{ number_format($b1, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($b1) }}</div></td>
						</tr>
						<tr>
							<td><strong>TASK  PORTAL FIT SATISFACTION</strong></td>
							<td><div><strong>{{ number_format($bx, 2) + 0 }}</strong></div></td>
							<td><div><strong>{{ \App\Survey::LabelName($bx) }}</strong></div></td>
						</tr>
						<tr><td colspan="3">&nbsp;</td></tr>






						<tr>
							<td><div><strong>Attributes</strong></div></td>
							<td><div><strong>Mean</strong></div></td>
							<td><div><strong>Status</strong></div></td>
						</tr>
						<tr>
							<td><div>Trust</div></td>
							<td><div>{{ number_format($c1, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($c1) }}</div></td>
						</tr>
						<tr>
							<td><div>Security</div></td>
							<td><div>{{ number_format($c2, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($c2) }}</div></td>
						</tr>
						<tr>
							<td><div>Privacy</div></td>
							<td><div>{{ number_format($c3, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($c3) }}</div></td>
						</tr>
						<tr>
							<td><strong>TRUST, SECURITY AND PRIVACY SATISFACTION</strong></td>
							<td><div><strong>{{ number_format($cx, 2) + 0 }}</strong></div></td>
							<td><div><strong>{{ \App\Survey::LabelName($cx) }}</strong></div></td>
						</tr>
						<tr><td colspan="3">&nbsp;</td></tr>





			
						<tr>
							<td><div><strong>Attributes</strong></div></td>
							<td><div><strong>Mean</strong></div></td>
							<td><div><strong>Status</strong></div></td>
						</tr>
						<tr>
							<td><div>Entertainment</div></td>
							<td><div>{{ number_format($d1, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($d1) }}</div></td>
						</tr>
						<tr>
							<td><div>Consistance Image</div></td>
							<td><div>{{ number_format($d2, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($d2) }}</div></td>
						</tr>
						<tr>
							<td><div>Relative Advantage</div></td>
							<td><div>{{ number_format($d3, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($d3) }}</div></td>
						</tr>
						<tr>
							<td><div>Website Structure</div></td>
							<td><div>{{ number_format($d4, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($d4) }}</div></td>
						</tr>
						<tr>
							<td><div>Entry Guidance</div></td>
							<td><div>{{ number_format($d5, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($d5) }}</div></td>
						</tr>
						<tr>
							<td><div>Aesthetic Design</div></td>
							<td><div>{{ number_format($d6, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($d6) }}</div></td>
						</tr>
						<tr>
							<td><div>Visual Appeal</div></td>
							<td><div>{{ number_format($d7, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($d7) }}</div></td>
						</tr>
						<tr>
							<td><div>Innovativeness</div></td>
							<td><div>{{ number_format($d8, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($d8) }}</div></td>
						</tr>
						<tr>
							<td><div>Convinience of Access</div></td>
							<td><div>{{ number_format($d9, 2) + 0 }}</div></td>
							<td><div>{{ \App\Survey::LabelName($d9) }}</div></td>
						</tr>
						<tr>
							<td><strong>DESIGN QUALITY SATISFACTION</strong></td>
							<td><div><strong>{{ number_format($dx, 2) + 0 }}</strong></div></td>
							<td><div><strong>{{ \App\Survey::LabelName($dx) }}</strong></div></td>
						</tr>
					</table>
				</div>


				<div class="panel-footer">
					{{ Form::button('Save&nbsp;<i class="icon-arrow-right"></i>',['type' => 'submit', 'class' => 'btn btn-primary', 'id' => 'btn_save'])  }}
				</div>   


			</div>
		</div>
	</div>
</div>


{{ Form::hidden('project', session()->get('project')) }}
{{ Form::hidden('a1', round($a1, 2)) }}
{{ Form::hidden('a2', round($a2, 2)) }}
{{ Form::hidden('a3', round($a3, 2)) }}
{{ Form::hidden('a4', round($a4, 2)) }}
{{ Form::hidden('a5', round($a5, 2)) }}
{{ Form::hidden('ax', round($ax, 2)) }}
{{ Form::hidden('b1', round($b1, 2)) }}
{{ Form::hidden('bx', round($bx, 2)) }}
{{ Form::hidden('c1', round($c1, 2)) }}
{{ Form::hidden('c2', round($c2, 2)) }}
{{ Form::hidden('c3', round($c3, 2)) }}
{{ Form::hidden('cx', round($cx, 2)) }}
{{ Form::hidden('d1', round($d1, 2)) }}
{{ Form::hidden('d2', round($d2, 2)) }}
{{ Form::hidden('d3', round($d3, 2)) }}
{{ Form::hidden('d4', round($d4, 2)) }}
{{ Form::hidden('d5', round($d5, 2)) }}
{{ Form::hidden('d6', round($d6, 2)) }}
{{ Form::hidden('d7', round($d7, 2)) }}
{{ Form::hidden('d8', round($d8, 2)) }}
{{ Form::hidden('d9', round($d9, 2)) }}
{{ Form::hidden('dx', round($dx, 2)) }}
{{ Form::close() }}





<script type="text/javascript">
$(document).ready(function(){
	$(document).on('click','#btn_save',function() {
		var answer = confirm('Do you want to save this record?');
		if (answer == true) {
			return true;
		}
		else {
			return false;
		} 
	});
});
</script>



@endsection