if (!!!templates) var templates = {};
templates["form-publish-box"] = new Hogan.Template({code: function (c,p,i) { var t=this;t.b(i=i||"");t.b("<div class=\"columns\">");t.b("\n" + i);t.b("    <div id=\"submit-div\" class=\"ch-box ch-publish-box\">");t.b("\n" + i);t.b("        <div class=\"header-box\">");t.b("\n" + i);t.b("            <h3 class=\"title\"><span>Publish</span></h3>");t.b("\n" + i);t.b("        </div>");t.b("\n");t.b("\n" + i);t.b("        <div class=\"body-box row\">");t.b("\n" + i);t.b("            <div class=\"columns\">");t.b("\n" + i);t.b("                <h4>titlo</h4>");t.b("\n");t.b("\n" + i);t.b("                <p>Aver q onda</p>");t.b("\n" + i);t.b("            </div>");t.b("\n" + i);t.b("        </div>");t.b("\n");t.b("\n" + i);t.b("        <div class=\"footer-publish\">");t.b("\n" + i);t.b("            <div id=\"minor-publishing-actions\">");t.b("\n" + i);t.b("            </div>");t.b("\n" + i);t.b("            <div id=\"major-publishing-actions\">");t.b("\n" + i);t.b("                <div id=\"delete-action\">");t.b("\n" + i);t.b("                    <a href=\"\" class=\"submit-delete\">Move to Trash</a>");t.b("\n" + i);t.b("                </div>");t.b("\n" + i);t.b("                <div id=\"publish-action\">");t.b("\n" + i);t.b("                    <input type=\"submit\" name=\"publish\" id=\"publish\" value=\"Publish\"");t.b("\n" + i);t.b("                           class=\"button small\"/>");t.b("\n" + i);t.b("                </div>");t.b("\n" + i);t.b("                <div class=\"clear-both\"></div>");t.b("\n" + i);t.b("            </div>");t.b("\n" + i);t.b("        </div>");t.b("\n" + i);t.b("    </div>");t.b("\n" + i);t.b("</div>");return t.fl(); },partials: {}, subs: {  }});