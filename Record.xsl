<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
      <html>
          <head>
              <title>Student Data</title>
              <style>
                h1 {text-align: center;}
                table, th, td {
                  font-size: 30px;
                  border: 1px solid black;
                  border-collapse: collapse;
                }
                table.center {
                  margin-left: auto; 
                  margin-right: auto;
                }
              </style>
          </head>  
          <body>
               <div>
                <h1> Demo for XML and XSL </h1>
               </div>
               <table class="center" border="1"  style="border-collapse:collapse;">
                 <tr bgcolor="orange">
                  <th>SNo</th>
                  <th>Field</th>
                  <th>Info</th>
                  <th>Info Type</th>           
                  </tr>
                  <xsl:for-each select="Records/Record">
                   <tr>
                     <td><xsl:value-of select="sno"/></td> 
                     <td><xsl:value-of select="field"/></td> 
                     <td><xsl:value-of select="info"/></td>
                     <td><xsl:value-of select="type"/></td> 
                   </tr>
                   </xsl:for-each>
               </table> 
          </body>
      </html>
  </xsl:template>
</xsl:stylesheet>