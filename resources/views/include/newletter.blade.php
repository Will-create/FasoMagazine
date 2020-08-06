
    <div class="footer-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4> Newsletter Faso-Media.bf</h4>
          <p>Chaque matin, recevez gratuitement toute l'actualité du jour par mail. Inscrivez-vous à la newsletter. </p>
        </div>
        <div class="col-lg-6">
        @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
   @endif
   @if (\Session::has('failure'))
    <div class="alert alert-danger">
      <p>{{ \Session::get('failure') }}</p>
    </div><br />
   @endif
    <h2>Faso-Media Newsletter </h2><br/>
   

    <form method="post" action="{{url('/2')}}">
    @csrf
       <input type="email" name="email"><input type="submit" value="Subscribe">
      
      
  </form>
       
       
        </div>
      </div>
    </div>
  </div>