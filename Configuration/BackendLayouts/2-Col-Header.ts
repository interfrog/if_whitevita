backend_layout {
  colCount = 3
  rowCount = 3
  rows {
    1 {
      columns {
        1 {
          name = Kopfbereich
          colPos = 1
          colspan = 3
          allowed = text,textpic,image
        }
      }
    }
    2 {
      columns {
        1 {
          name = Linke Spalte
          colPos = 2
        }
        2 {
          name = Hauptinhalt
          colPos = 0
          colspan = 2
        }
      }
    }
    3 {
      columns {
        1 {
          name = Fußbereich (vererbt)
          colPos = 10
          colspan = 3
        }
      }
    }
  }
}
