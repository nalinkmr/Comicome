html
  head
    title LOGIN
    link(rel="icon", href="img/icon.jpg")
  style
    body {
    background:url("images/login.jpeg");
    background-size: 1300px 700px;
    background-repeat: no-repeat;
    }
  body
    font(color="black")
      h1(align="right") LOGIN
      font(color="black")
        hr
        font(color="black")
          table(align="right")
            tr
              th
                table
                  tr
                    font(color="black")
                      h3  INSERT DETAILS 
                      form(name="input", action="demo_form_action.asp", method="get")
                        td.add
                           Username
                          input(type="text", placeholder="enter username", style="background-color:lightgreen")
                        td
                        td.add
                           Password
                          input(type="password", name="password", placeholder="enter password", style="background-color:LightGreen")
                        td.add
                          input(type="submit", value="login")
                  tr
                    td.add
                      input(type="checkbox", name="loggedin", value="login")
                       keep me logged in
                      br
                    td
                    td.add
                      a(href="http") Can"t login
