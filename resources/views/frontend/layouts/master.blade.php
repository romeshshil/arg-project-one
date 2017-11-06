
@include('frontend.layouts.header')

	<body>	
		

			@include('frontend.layouts.mainheader')


<div class="container">
				@yield('content');
</div>
<style>
  /* Imtiz */
  .buy-footer p{
    margin: 0;
  }
  .buy-footer p.right{
    text-align: right;
  }
  .buy-footer p.right a{
    color: #fff;
    transition: all .3s ease-in-out;
  }
  .buy-footer p.right a:hover{
    color: #111;
  }
  .buy-footer .container-res .bottom-btn{
    width: 242px;
    margin: 0 auto;
    padding: 40px 0;
  }
  .bottom-btn a{
    display: inline-block;
    float: left;
    color: #fff;
    font-weight: bold;
    line-height: 20px;
    padding: 0 15px;
    border-radius:  0 0 3px 3px;
    transition: all .3s ease-in-out;
    border-right: 2px solid #fff;
  }
  .bottom-btn a:last-child{
    border-right: none;
  }
  .bottom-btn a:hover{
    color: #111;
  }
  .bottom-btn li a:focus, .buy-footer p.right a:focus{
    text-decoration: none;
  }

  @media screen and (max-width: 768px){
    .buy-footer{
      padding: 15px 0;
    }
    .buy-footer p {
      color: #fff;
      line-height: 25px;
      text-align: center;
    }
    .buy-footer p.right{
      text-align: center;
    }
    .buy-footer .container-res .bottom-btn{
      padding: 5px 0;
    }
  }
</style>
<div class="container-fluid buy-footer">
  <div class="container container-res">
    <div class="row">
      <div class="col-sm-4">
        <p class="left">Copyright &copy; IPDBSE 2017</p>
      </div>
      <div class="col-sm-4">
        <div class="bottom-btn clearfix">
          <!--a href="https://ipdbse.com/subscriber/payment_proof">Payment Proof</a-->
          <a href="https://ipdbse.com/subscriber/payment_history">Order History</a>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="right"></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script>
  $(function(){
    $('#menu').slicknav();
  });
</script>

		@yield('scripts');

</body>
</html>
