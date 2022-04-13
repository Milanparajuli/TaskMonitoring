<footer>
      <div>
        copyright &copy; Milan Parajuli <span id="getYear"></span>
        <script>
          document.getElementById("getYear").innerText = new Date().getFullYear();
        </script>
      </div>
    </footer>
    <!-- footer end  -->

    <script>
      let sidenav= document.getElementById('sidenav');
      let menubar= document.getElementById('menubar');
      sidenav.style.width="0px";
      menubar.onclick=function(){
        if(sidenav.style.width=="0px"){
          sidenav.style.width="250px";
        }
        else{
          sidenav.style.width="0px";
        }
      }
      

    </script>
</body>

</html>