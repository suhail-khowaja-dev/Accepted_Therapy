@extends('admin.layouts.master')
<style>
    .upadateButton {
        width: 75%;
        margin: auto;
    }
    .updateBtn {
     background-color: #1572e8;
    padding: 8px 20px;
    color: white;
    border-radius: 8px;
    border: navajowhite;
    margin-top: 16px;
    cursor: pointer;
}
</style>
@section('content')
    @if ($message = Session::get('article_update'))
        <div class="alert alert-success alert-block" style="background: #F7E7CE">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong id="test">{{ $message }}</strong>

        </div>
    @endif



    <form action="{{ route('pdf_update_file', ['id' => $pdf->id]) }}" method="post" enctype="multipart/form-data">

        @csrf

        <h2 style="color:green">Upload PDF</h2>

        <table>

            <tr>
                <td>
                    <p style="color:green"> PDF</p>

                </td>
                <td>

                    <div class="row justify-content-center">
                        <iframe src="{{asset('uploads/cms/' .$pdf->pdf) }}"></iframe>
                        {{-- </object> --}}
                    </div>

                    <br>

                    <input type="file" name="pdf" id="author_img">



                    @error('pdf')
                        <p class="help-block" style="color: red">{{ $errors->first('pdf') }} </p>
                    @enderror

                    {{-- <p style="color:red">

                        Image Size Recommended: 141px * 110px<br>

                        Allow Ext: png|jpeg|jpg</p> --}}
                </td>
                <br>

            </tr>

            <tr>

            {{-- <tr>
                <td>

                    <input type="submit" name="submit" value="update" class="class btn btn-primary">

            </tr>
            </td> --}}

        </table>
        <div class="upadateButton">
            <button type="submit" class="updateBtn">Update</button>
         </div>

    </form>

    </div>

    </div>
@endsection
