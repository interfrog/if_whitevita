lib.parseFunc_RTE {
  externalBlocks.table {
    ## remove table spacing and padding
    stdWrap {
      HTMLparser = 1
      HTMLparser.tags.table.overrideAttribs = cellpadding="0" cellspacing="0" border="0"
    }

    ## nochmaliges parsen von tabellenzellen auschalten, damit inhalte nicht wieder in p gepackt werden
    HTMLtableCells.default.callRecursive = 0

    ## enable links in Tablecells
    HTMLtableCells.default.stdWrap.parseFunc {
      makelinks = 1
      makelinks.http.keep = scheme,path,query
      makelinks.mailto.keep = path
      tags {
        link = TEXT
        link {
          current = 1
          typolink.parameter.data = parameters : allParams
        }
      }
    }
  }
  # remove class="bodytext" from paragraphs
  nonTypoTagStdWrap.encapsLines {
    addAttributes.P.class >
    addAttributes.P.class.setOnly >
  }
}