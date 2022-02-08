<style>
    body {
        background-color: grey;
    }
</style>

<h2>My Platform</h2>



<!--old-->

// <script>
//   window.fbAsyncInit = function() {
//     FB.init({
//       appId      : '926034561556720',
//       cookie     : true,
//       xfbml      : true,
//       version    : 'v10.0'
//     });
      
//     FB.AppEvents.logPageView();   
//     // checkLoginState();  
//   };

//   (function(d, s, id){
//      var js, fjs = d.getElementsByTagName(s)[0];
//      if (d.getElementById(id)) {return;}
//      js = d.createElement(s); js.id = id;
//      js.src = "https://connect.facebook.net/en_US/sdk.js";
//      fjs.parentNode.insertBefore(js, fjs);
//   }(document, 'script', 'facebook-jssdk'));
   
   
//   function checkLoginState() {
//       FB.getLoginStatus(function(response) {
//           console.log(response);
//         });

//   }
   
   
// </script>


<!-- <fb:login-button 
   scope="public_profile,email,pages_show_list"
   onlogin="checkLoginState();">
 </fb:login-button> -->






<!-- <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '926034561556720',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v10.0'
    });
    login()
  };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

<script>


function login() {

    FB.login(function(response) {
    if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
    } else {
     console.log('User cancelled login or did not fully authorize.');
    }
});

} -->





    

</script>

