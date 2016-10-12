@extends('layouts.app')

@section('content')


{{ Form::open(array('url' => '', 'role'=>'form')) }}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Step 1</div>

                <div class="panel-body">


					  <table class="table">
					      <tr>
					         <td width="313"><div align="center"><strong>Attributes</strong></div></td>
					         <td width="95"><div align="center"><strong>Mean</strong></div></td>
					         <td width="160"><strong>Satisfied / Not Satisfied</strong></td>
					      </tr>
					      <tr>
					         <td><div align="center">Content</div></td>
					         <td><div align="center">{{ number_format($a1, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($a1) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Accuracy</div></td>
					         <td><div align="center">{{ number_format($a2, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($a2) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Format</div></td>
					         <td><div align="center">{{ number_format($a3, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($a3) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Ease of Use</div></td>
					         <td><div align="center">{{ number_format($a4, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($a4) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Timeliness</div></td>
					         <td><div align="center">{{ number_format($a5, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($a5) }}</div></td>
					      </tr>
					      <tr>
					         <td><strong>END USER COMPUTING SATISFACTION</strong></td>
					         <td><div align="center"><strong>{{ number_format($ax, 2) + 0 }}</strong></div></td>
					         <td><div align="center"><strong>{{ Survey::StatusStatisfied($ax) }}</strong></div></td>
					      </tr>
					   </table>  
					   <p>&nbsp;</p>
					   <table width="587" border="1">
					      <tr>
					         <td width="311"><div align="center"><strong>Attributes</strong></div></td>
					         <td width="94"><div align="center"><strong>Mean</strong></div></td>
					         <td width="160"><div align="center"><strong>Satisfied / Not Satisfied</strong></div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Task Portal Fit</div></td>
					         <td><div align="center">{{ number_format($b1, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($b1) }}</div></td>
					      </tr>
					      <tr>
					         <td><strong>TASK  PORTAL FIT SATISFACTION</strong></td>
					         <td><div align="center"><strong>{{ number_format($bx, 2) + 0 }}</strong></div></td>
					         <td><div align="center"><strong>{{ Survey::StatusStatisfied($bx) }}</strong></div></td>
					      </tr>
					   </table>
					   <p>&nbsp;</p>
					   <table width="580" border="1">
					      <tr>
					         <td width="304"><div align="center"><strong>Attributes</strong></div></td>
					         <td width="94"><div align="center"><strong>Mean</strong></div></td>
					         <td width="160"><div align="center"><strong>Satisfied / Not Satisfied</strong></div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Trust</div></td>
					         <td><div align="center">{{ number_format($c1, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($c1) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Security</div></td>
					         <td><div align="center">{{ number_format($c2, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($c2) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Privacy</div></td>
					         <td><div align="center">{{ number_format($c3, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($c3) }}</div></td>
					      </tr>
					      <tr>
					         <td><strong>TRUST, SECURITY AND PRIVACY SATISFACTION</strong></td>
					         <td><div align="center"><strong>{{ number_format($cx, 2) + 0 }}</strong></div></td>
					         <td><div align="center"><strong>{{ Survey::StatusStatisfied($cx) }}</strong></div></td>
					      </tr>
					   </table>
					   <p>&nbsp;</p>
					   <table width="580" border="1">
					      <tr>
					         <td width="304"><div align="center"><strong>Attributes</strong></div></td>
					         <td width="94"><div align="center"><strong>Mean</strong></div></td>
					         <td width="160"><div align="center"><strong>Satisfied / Not Satisfied</strong></div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Entertainment</div></td>
					         <td><div align="center">{{ number_format($d1, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($d1) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Consistance Image</div></td>
					         <td><div align="center">{{ number_format($d2, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($d2) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Relative Advantage</div></td>
					         <td><div align="center">{{ number_format($d3, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($d3) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Website Structure</div></td>
					         <td><div align="center">{{ number_format($d4, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($d4) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Entry Guidance</div></td>
					         <td><div align="center">{{ number_format($d5, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($d5) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Aesthetic Design</div></td>
					         <td><div align="center">{{ number_format($d6, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($d6) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Visual Appeal</div></td>
					         <td><div align="center">{{ number_format($d7, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($d7) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Innovativeness</div></td>
					         <td><div align="center">{{ number_format($d8, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($d8) }}</div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Convinience of Access</div></td>
					         <td><div align="center">{{ number_format($d9, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($d9) }}</div></td>
					      </tr>
					      <tr>
					         <td><strong>DESIGN QUALITY SATISFACTION</strong></td>
					         <td><div align="center"><strong>{{ number_format($dx, 2) + 0 }}</strong></div></td>
					         <td><div align="center"><strong>{{ Survey::StatusStatisfied($dx) }}</strong></div></td>
					      </tr>
					   </table>
					   <p>&nbsp;</p>
					   <table width="580" border="1">
					      <tr>
					         <td width="304"><div align="center"><strong>Attributes</strong></div></td>
					         <td width="94"><div align="center"><strong>Mean</strong></div></td>
					         <td width="160"><div align="center"><strong>Satisfied / Not Satisfied</strong></div></td>
					      </tr>
					      <tr>
					         <td><div align="center">Service Quality</div></td>
					         <td><div align="center">{{ number_format($e1, 2) + 0 }}</div></td>
					         <td><div align="center">{{ Survey::StatusStatisfied($e1) }}</div></td>
					      </tr>
					      <tr>
					         <td><strong>SERVICE QUALITY SATISFACTION</strong></td>
					         <td><div align="center"><strong>{{ number_format($ex, 2) + 0 }}</strong></div></td>
					         <td><div align="center"><strong>{{ Survey::StatusStatisfied($ex) }}</strong></div></td>
					      </tr>
					   </table>
				</div>
			</div>
		</div>
	</div>
</div>