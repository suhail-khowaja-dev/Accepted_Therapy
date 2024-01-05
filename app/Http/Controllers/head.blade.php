

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{url('/uploads/feature/'.logo_management()->feature_image)}}">

    <!-- feature image meanse favicon image -->

  
    @if(request()->path()=='warehouse')
     <title>{{request_path()->seo_title}}</title>
    <meta name="keywords" content="{{request_path()->seo_keyword}}">
    <meta name="description" content="{{request_path()->seo_descriptions}}">
@elseif(request()->path()=='delivery')
 <title>{{request_path()->seo_title}}</title>
    <meta name="keywords" content="{{request_path()->seo_keyword}}">
    <meta name="description" content="{{request_path()->seo_descriptions}}">
@else
<title>
{{request()->path()=="/"?request_path()->seo_title:ucwords(str_replace('-',' ',request()->path()))}} 
    @endif
    </title>
    @if(@request_path()->seo_title)
    <meta name="keywords" content="{{request_path()->seo_keyword}}">
    <meta name="description" content="{{request_path()->seo_descriptions}}">
    @elseif(request_path()=="/")
   
     <meta name="keywords" content="{{request_path()->seo_keyword}}">
    <meta name="description" content="{{request_path()->seo_descriptions}}">
    @endif
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link  rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<!-- Sweet alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--  -->
    
</head>



