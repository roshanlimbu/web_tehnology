<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
    <body>
      <h2>Employee:</h2>
      <ul>
        <xsl:for-each select="catalog/employee">
            <li><xsl:value-of select="name"/></li>
            <li><xsl:value-of select="department"/></li>
            <li><xsl:value-of select="jobTitle"/></li>
            <li><xsl:value-of select="salary"/></li>
            <li><xsl:value-of select="email"/></li>
            <br/>
        </xsl:for-each>
      </ul>
    </body>
  </html>
</xsl:template>
  </xsl:stylesheet>

