# Fabrik Element ListElement <img src="/images/jlowcodelogo.png" width="102px" align="right" />

O objetivo desse plugin é permitir a exibição de uma lista vinculada na página de visualização de um registro. Um exemplo de utilização, são os comentários. Um comentário seria uma lista (id_comment, id_filme, date, nome, email, mensagem) que ficaria vinculada a lista principal (ex. Filmes), e ao visualizar um filme, no lugar do elemento *list details*, é exibido o formulário para adicionar um comentário. No entanto, para conseguir usar este plugin devem ser criadas duas listas, estando uma vinculada a outra.

### Conteúdo
- [Configuração](#configuração)
  - [Options](#options)

## Configuração

Para utilizar este plugin acesse **Components > Fabrik > Elements > New**, e em "**Plug-in***" selecione a opcão "**listelement**".

<img src="/images/1.png" width="900px" />

### Options

<img src="/images/2.png" width="900px" />

- **Connection**: conexão com o banco de dados.
- **Field**: campo de formulário vinculado ao filtro da tabela filha.
- **Filter list**: lista que aparecerá na estrutura de detalhes para compor junto com os formulários que são referenciados.
- **Filter field**: campo de lista referenciada que servirá como filtro para não trazer todos os resultados da lista selecionada no "**Filter list**".
