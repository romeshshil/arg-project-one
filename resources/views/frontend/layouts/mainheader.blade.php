<div class="container-fluid" style="background:#eee; height:100%; min-height:100vh;">
<div class="row">
<div class="container-fluid buy">
<div class="row">
<div class="new-custon-class1">
   <div class="container">
      <div class="row">
         <div class="col-md-offset-1 col-md-4">
            <a href="https://ipdbse.com/subscriber/dashboard">
            <img class="header-img-res" style="width: 200px;" src="https://ipdbse.com/public/images/ip2.png">
            </a>
         </div>
         <div class="col-md-offset-3 col-md-3">
            <h3 class="user_name_top"><span style="color:#fff;">Hello!</span>  {{ Auth::user()->name }}</h3>
         </div>
      </div>
   </div>
</div>
<!--div class="container">
   <h3 class="user_name_top"><span style="color:#fff;">Hello!</span> mahfuz</h3>
   <div class="row">
   	<div class="logo col-md-4">
   		<div>
   			<a href="https://ipdbse.com/subscriber/dashboard">
   				<img style="width: 300px;margin-top: -25px;" src="https://ipdbse.com/public/images/logo.png">
   			</a>
   		</div>
   	</div>
   
   	<div class="col-md-8">
   		<div class="navmenu"style="text-align: center;">									
   			<ul id="menu" data-target="dashboard">
   				<li id="dashboard"><a href="https://ipdbse.com/subscriber/dashboard">Home</a></li>
   				
   				<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
   
   <h4>A PHP Error was encountered</h4>
   
   <p>Severity: Notice</p>
   <p>Message:  Undefined property: stdClass::$reactive</p>
   <p>Filename: includes/header.php</p>
   <p>Line Number: 93</p>
   
   </div>										<li id="live_chat" ><a href="https://ipdbse.com/subscriber/live_chat">Live Chat</a></li>
   				<li id="referral_list" ><a href="https://ipdbse.com/subscriber/dashboard/referral_list">Referral List</a></li>
   
   				<li id="ads" ><a href="https://ipdbse.com/subscriber/dashboard/ads">Post Ads</a></li>
   				<li id="settings" ><a href="https://ipdbse.com/subscriber/dashboard/settings">Settings</a></li>
   				
   
   				<li class="last custom-menu"><a href="https://ipdbse.com/access/subscriber/logout">Logout</a></li>
   			</ul>
   		</div>								
   	</div>
   </div>
   </div-->
<style>
   #menu{float:right; margin-top:0; background:#F4511E; margin-bottom: 20px;}
   #menu li{background:#F4511E; padding:0 9px;}
</style>
<div class="container-fluid" style="background:#F4511E;">
   <div class="container">
      <div class="row">
         <div class="col-md-offset-1 col-md-10">
            <div class="navmenu"style="text-align: center;">
               <ul id="menu" data-target="dashboard">
                  <li id="dashboard"><a href="https://ipdbse.com/subscriber/dashboard">Home</a></li>
                  @if(Auth::user()->usertype=="2")
                  <li id="buy" ><a href="https://ipdbse.com/subscriber/dashboard/buy">Buy</a></li>
                  <li id="sell" ><a href="https://ipdbse.com/subscriber/dashboard/sell">Sell</a></li>
                  <li id="exchange" ><a href="https://ipdbse.com/subscriber/dashboard/exchange">Exchange</a></li>
                  @endif
                  <li id="live_chat" ><a href="https://ipdbse.com/subscriber/live_chat">Live Chat</a></li>
                  <li id="referral_list" ><a href="https://ipdbse.com/subscriber/dashboard/referral_list">Referral List</a></li>
                  <!--li id="sell_commission" ><a href="https://ipdbse.com/subscriber/dashboard/sell_commission">Sell Commission</a></li-->
                  <li id="ads" ><a href="https://ipdbse.com/subscriber/dashboard/ads">Post Ads</a></li>
                  <li id="settings" ><a href="https://ipdbse.com/subscriber/dashboard/settings">Edit Profile</a></li>
                  <!--li id="payment_proof" ><a href="https://ipdbse.com/subscriber/payment_proof">Payment Proof</a></li-->
                  <li class="last custom-menu"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>