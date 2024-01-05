@extends('admin.layouts.master')

@section('content')
    @if ($message = Session::get('article_update'))
        <div class="alert alert-success alert-block" style="background: #F7E7CE">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong id="test">{{ $message }}</strong>

        </div>
    @endif







    <form action="{{ route('logo_update') }}" method="post" enctype="multipart/form-data">

        @csrf

        <h2 style="color:green">SET LOGO</h2>





        <table>

            <tr>
                <td>
                    <p style="color:green"> Logo</p>

                </td>
                <td>



                    <img src="{{ url('/uploads/logo/' . logo_management()->header) }}" width="100%">

                    <br>

                    <input type="file" name="logo" id="author_img">



                    @error('logo')
                        <p class="help-block" style="color: red">{{ $errors->first('logo') }} </p>
                    @enderror



                    <p style="color:red">







                        Image Size Recommended: 141px * 110px<br>

                        Allow Ext: png|jpeg|jpg</p>

                </td>

            </tr>

            <tr>



                <td>
                    <p style="color:green"> Footer</p>

                </td>
                <td>





                    <img src="{{ url('/uploads/footer/' . logo_management()->footer) }}" width="100%" width="100%">

                    <br>

                    <input type="file" name="footer" id="author_img">

                    @error('footer')
                        <p class="help-block" style="color: red">{{ $errors->first('footer') }}

                        </p>
                    @enderror





                    <p style="color:red"> Image Size Recommended: 141px * 110px<br>

                        Allow Ext: png|jpeg|jpg</p>

                </td>

            </tr>



            <tr>

                <td>
                    <p style="color:green"> Favicon</p>

                </td>
                <td>

                    <img src="{{ url('/uploads/feature/' . logo_management()->feature_image) }}" width="100px">

                    <br>



                    <input type="file" name="feature" id="author_img" value="Feature Image">

                    @error('feature')
                        <p class="help-block" style="color: red">{{ $errors->first('feature') }}

                        </p>
                    @enderror



                    <p style="color:red"> Image Size Recommended: 141px * 110px<br>

                        Allow Ext: png|jpeg|jpg</p>

                </td>

            </tr>





            <tr>
                <td>

                    <input type="submit" name="submit" value="update" class="class btn btn-primary">





            </tr>
            </td>



        </table>



    </form>



    </div>

    </div>
@endsection
