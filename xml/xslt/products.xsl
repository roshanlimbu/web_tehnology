<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="xml" indent="yes"/>

  <xsl:template match="products">
    <groupedProducts>
      <xsl:for-each select="product[quantity >= 10]/category[not(. = preceding-sibling::category)]">
        <category>
          <name><xsl:value-of select="."/></name>
          <xsl:for-each select="../../product[quantity >= 10][category = current()]">
            <xsl:sort select="price" data-type="number" order="descending"/>
            <product name="{productname}">
              <xsl:copy-of select="price"/>
              <xsl:copy-of select="quantity"/>
              <total-price>
                <xsl:value-of select="price * quantity"/>
              </total-price>
            </product>
          </xsl:for-each>
        </category>
      </xsl:for-each>
    </groupedProducts>
  </xsl:template>
</xsl:stylesheet>

