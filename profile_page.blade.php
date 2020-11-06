


<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
     body {font-family: 'Nunito';            }
  .profile_sum {background-color: beige; border-radius: 20px; max-width: 90%; margin-left: 5%; padding: 1%;}
  .gal {max-width: 90%;margin-left: 8%;padding: 1%;max-height: 150px;}.gimg {max-width: 100%;max-height: 100%;}.gbox {background-color: beige;border-radius: 10px;margin:10px;max-width: 300px;padding:0px;}.gbox p,h4{padding:10px;}.imgdate{text-align: right;padding:0px;}.hrt{position: absolute; color: red; padding:10px;}.pimg {padding: 0px;border: none;}.gbox h4{font-weight: bold;color:white;position: absolute;top:34%;}
</style>
    </head>
    <body class="antialiased">

    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="row panel profile_sum col-md-12">
        <div class="col-md-2">
         <img src="{{ asset( $data['profile_picture']) }}" class="img-thumbnail picture pimg" style="border-radius:50%;" />
        </div>
        <div class="col-md-8 header" > 
            <h1>{{ $data['name'] }}</h1>
                <p>bio</p>
                <span>"{{ $data['bio'] }} "</span>
        </div>
       <div class="col-md-2">
          <p><br><br>Phone </p><label style="color:#f33da1;font-weight:200;">{{ $data['phone'] }}</label>
                    <p>email</p><label style="color:#f33da1;font-weight:200;">{{ $data['email'] }}</label> 
        </div>  
    </div>
    
            
        <div class="col-md-12 gal">
            
    @foreach($data['album'] as $gallery[])
    @foreach ($gallery as $photo) 
    @endforeach

           <div class="col-md-4 gallery gbox">
            <img src="{{asset( $photo['img']) }}" class="gimg" />
                <h4>{{ $photo['title'] }}</h4>
                <span><p>{{ $photo['description'] }}</p></span>
             
                @if($photo['featured'] == 1)
                  <i class="fa fa-heart fa-lg hrt" aria-hidden="true"></i>
                @else
                    <i class=""></i>
                @endif
                <p class="imgdate">{{ $photo['date'] }}</p>
            </div>
    @endforeach

            </div>
        </div>
  
</div>

</div>

    </body>
</html>
