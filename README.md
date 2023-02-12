# Fabrik Element ListElement

The purpose of this plugin is to allow the display of a linked list on the view page of a record. An example of usage is comments. A comment would be a list (id_comment, id_film, date, name, email, message) that would be linked to the main list (eg Movies), and when viewing a movie, instead of the *list details* element, the form is displayed to add a comment. However, to be able to use this plugin, two lists must be created, one linked to the other.

## Contents
- [Settings](#Settings)
  - [Options](#options)

### Settings

To use this plugin, go to **Components > Fabrik > Elements > New**, and in `Plug-in` select the `listelement` option.

<img src="/images/1.png" width="900px" />

#### Options

<img src="/images/2.png" width="900px" />

- `Connection`: connection to the database.

- `Field`: form field linked to the filter of the child table.

- `Filter list`: list that will appear in the details structure to compose along with the forms that are referenced.

- `Filter field`: referenced list field that will serve as a filter to not bring all the results of the selected list in the `Filter list`.
