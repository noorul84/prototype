@extends('layouts.app')

@section('content')


{{ Form::open(array('role'=>'form')) }}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Project: <strong>{{ session()->get('project') }}</strong> | Step 2</div>

                <div class="panel-body">


                    <table class="table">
                        <tr>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">&nbsp;</th>
                            <th colspan="5" scope="col">Strongly Dissatisfy........................... Stongly Satisfy</th>
                        </tr>
                        <tr>
                            <th>Attributes</th>
                            <th>Indicator</th>
                            <th><p>1</p><p>SD</p></th>
                            <th><p>2</p><p>D</p></th>
                            <th><p>3</p><p>N</p></th>
                            <th><p>4</p><p>S</p></th>
                            <th><p>5</p><p>SS</p></th>
                        </tr>
                        <tr>
                            <td rowspan="5"><div align="center">Task Portal Fit</div></td>
                            <td><p>1. Sufficiency detailed user information is  maintain in e-government portal.<br />
                            </p></td>
                            <td><div align="center">
                                {{ Form::radio('b1', 1) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b1', 2) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b1', 3) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b1', 4) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b1', 5) }}             
                            </div></td>
                        </tr>
                        <tr>
                            <td><p>2. Information about services for user is  obvious in e-government portal.<br />
                            </p></td>
                            <td><div align="center">
                                {{ Form::radio('b2', 1) }}
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b2', 2) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b2', 3) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b2', 4) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b2', 5) }}             
                            </div></td>
                        </tr>
                        <tr>
                            <td><p>3. User can get information about the  services quickly and easily from e-government portal.<br />
                            </p>
                            <p><br />
                            </p></td>
                            <td><div align="center">
                                {{ Form::radio('b3', 1) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b3', 2) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b3', 3) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b3', 4) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b3', 5) }}             
                            </div></td>
                        </tr>
                        <tr>
                            <td><p>4. The information about services is stored  in so many forms in e-government portal that it is hard to know how to use it  effectively.</p></td>
                            <td><div align="center">
                                {{ Form::radio('b4', 1) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b4', 2) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b4', 3) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b4', 4) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b4', 5) }}             
                            </div></td>
                        </tr>
                        <tr>
                            <td>5. The information about services that user need is  displayed in a readable and understandable form in the e-government portal.</td>
                            <td><div align="center">
                                {{ Form::radio('b5', 1) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b5', 2) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b5', 3) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b5', 4) }}             
                            </div></td>
                            <td><div align="center">
                                {{ Form::radio('b5', 5) }}             
                            </div></td>
                        </tr>




                    </table>


                </div>


                <div class="panel-footer" align="center">
                    {{ Form::button('Next&nbsp;<i class="icon-arrow-right"></i>',['type' => 'submit', 'class' => 'btn btn-primary'])  }}
                </div>            




            </div>            
        </div>
    </div>
</div>


{{ Form::close() }}


@endsection
