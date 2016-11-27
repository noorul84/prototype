@extends('layouts.app')

@section('content')


{{ Form::open(array('role'=>'form')) }}
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">View Result</div>



				@if (count($details) > 0)
					@foreach ($details as $detail)
					<div class="panel-body">
						<table class="table">
							<tr>
								<td colspan="3"><strong>Project Name: </strong>{{ $detail->name }}</td>
							</tr>					
							<tr>
								<td><div><strong>Attributes</strong></div></td>
								<td><div><strong>Mean</strong></div></td>
								<td><strong>Status</strong></td>
							</tr>
							<tr>
								<td><div>Content</div></td>
								<td><div>{{ number_format($detail->a1, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->a1) }}</div></td>
							</tr>
							<tr>
								<td><div>Accuracy</div></td>
								<td><div>{{ number_format($detail->a2, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->a2) }}</div></td>
							</tr>
							<tr>
								<td><div>Format</div></td>
								<td><div>{{ number_format($detail->a3, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->a3) }}</div></td>
							</tr>
							<tr>
								<td><div>Ease of Use</div></td>
								<td><div>{{ number_format($detail->a4, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->a4) }}</div></td>
							</tr>
							<tr>
								<td><div>Timeliness</div></td>
								<td><div>{{ number_format($detail->a5, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->a5) }}</div></td>
							</tr>
							<tr>
								<td><strong>END USER COMPUTING SATISFACTION</strong></td>
								<td><div><strong>{{ number_format($detail->ax, 2) + 0 }}</strong></div></td>
								<td><div><strong>{{ \App\Survey::LabelName($detail->ax) }}</strong></div></td>
							</tr>	
							<tr><td colspan="3">&nbsp;</td></tr>
							<tr>
								<td><div><strong>Attributes</strong></div></td>
								<td><div><strong>Mean</strong></div></td>
								<td><div><strong>Status</strong></div></td>
							</tr>
							<tr>
								<td><div>Task Portal Fit</div></td>
								<td><div>{{ number_format($detail->b1, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->b1) }}</div></td>
							</tr>
							<tr>
								<td><strong>TASK  PORTAL FIT SATISFACTION</strong></td>
								<td><div><strong>{{ number_format($detail->bx, 2) + 0 }}</strong></div></td>
								<td><div><strong>{{ \App\Survey::LabelName($detail->bx) }}</strong></div></td>
							</tr>
							<tr><td colspan="3">&nbsp;</td></tr>
							<tr>
								<td><div><strong>Attributes</strong></div></td>
								<td><div><strong>Mean</strong></div></td>
								<td><div><strong>Status</strong></div></td>
							</tr>
							<tr>
								<td><div>Trust</div></td>
								<td><div>{{ number_format($detail->c1, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->c1) }}</div></td>
							</tr>
							<tr>
								<td><div>Security</div></td>
								<td><div>{{ number_format($detail->c2, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->c2) }}</div></td>
							</tr>
							<tr>
								<td><div>Privacy</div></td>
								<td><div>{{ number_format($detail->c3, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->c3) }}</div></td>
							</tr>
							<tr>
								<td><strong>TRUST, SECURITY AND PRIVACY SATISFACTION</strong></td>
								<td><div><strong>{{ number_format($detail->cx, 2) + 0 }}</strong></div></td>
								<td><div><strong>{{ \App\Survey::LabelName($detail->cx) }}</strong></div></td>
							</tr>
							<tr><td colspan="3">&nbsp;</td></tr>
							<tr>
								<td><div><strong>Attributes</strong></div></td>
								<td><div><strong>Mean</strong></div></td>
								<td><div><strong>Status</strong></div></td>
							</tr>
							<tr>
								<td><div>Entertainment</div></td>
								<td><div>{{ number_format($detail->d1, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->d1) }}</div></td>
							</tr>
							<tr>
								<td><div>Consistance Image</div></td>
								<td><div>{{ number_format($detail->d2, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->d2) }}</div></td>
							</tr>
							<tr>
								<td><div>Relative Advantage</div></td>
								<td><div>{{ number_format($detail->d3, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->d3) }}</div></td>
							</tr>
							<tr>
								<td><div>Website Structure</div></td>
								<td><div>{{ number_format($detail->d4, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->d4) }}</div></td>
							</tr>
							<tr>
								<td><div>Entry Guidance</div></td>
								<td><div>{{ number_format($detail->d5, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->d5) }}</div></td>
							</tr>
							<tr>
								<td><div>Aesthetic Design</div></td>
								<td><div>{{ number_format($detail->d6, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->d6) }}</div></td>
							</tr>
							<tr>
								<td><div>Visual Appeal</div></td>
								<td><div>{{ number_format($detail->d7, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->d7) }}</div></td>
							</tr>
							<tr>
								<td><div>Innovativeness</div></td>
								<td><div>{{ number_format($detail->d8, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->d8) }}</div></td>
							</tr>
							<tr>
								<td><div>Convinience of Access</div></td>
								<td><div>{{ number_format($detail->d9, 2) + 0 }}</div></td>
								<td><div>{{ \App\Survey::LabelName($detail->d9) }}</div></td>
							</tr>
							<tr>
								<td><strong>DESIGN QUALITY SATISFACTION</strong></td>
								<td><div><strong>{{ number_format($detail->dx, 2) + 0 }}</strong></div></td>
								<td><div><strong>{{ \App\Survey::LabelName($detail->dx) }}</strong></div></td>
							</tr>											
						</table>
					</div>
					@endforeach

					<div class="panel-footer" align="center">
						{{ Form::button('Print Page&nbsp;<i class="icon-printer"></i>',['type' => 'button', 'class' => 'btn btn-primary', 'id' => 'print_html'])  }}
					</div> 					
					
				@else
					<div class="panel-body">
						No record
					</div>
				@endif







			</div>
		</div>
	</div>
</div>          
{{ Form::close() }}


<script type="text/javascript">
$(document).ready(function(){
	$(document).on('click','#print_html',function() {
		window.print();
	});	
});
</script>

@endsection