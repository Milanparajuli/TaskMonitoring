<footer>
      <div>
        copyright &copy; <a href="https://milanparajuli.com.np/" style="text-decoration: none;">Milan Parajuli</a> <span id="getYear"></span>
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