if (!!!templates) var templates = {};
templates["form-box"] = new Hogan.Template({code: function (c,p,i) { var t=this;t.b(i=i||"");t.b("<div class=\"row\">");t.b("\n" + i);t.b("    <div class=\"columns\">");t.b("\n" + i);t.b("        <div class=\"ch-box\">");t.b("\n" + i);t.b("            <div class=\"header-box\">");t.b("\n" + i);t.b("                <h3 class=\"title\">Nuevo</h3>");t.b("\n" + i);t.b("            </div>");t.b("\n" + i);t.b("            <div class=\"body-box\">");t.b("\n" + i);t.b("                <h4>titlo h4</h4>");t.b("\n");t.b("\n" + i);t.b("                <p>Aver este parrafo que onda</p>");t.b("\n" + i);t.b("            </div>");t.b("\n" + i);t.b("        </div>");t.b("\n" + i);t.b("    </div>");t.b("\n" + i);t.b("</div>");return t.fl(); },partials: {}, subs: {  }});