/*Comando de Criação - LojaOnline*/

create table Usuario(
	Codigo Serial NOT NULL,
    Nome VarChar(30) NOT NULL,
    Bloueado Integer NOT NULL,
    Login VarChar(50) NOT NULL,
    Senha VarChar(20) NOT NULL,
	Primary Key (Codigo)
);

create table Pessoa(
	Codigo Serial NOT NULL,
	CodigoUsuario Integer NOT NULL,
	Nome Varchar(30) NOT NULL,
	Snome Varchar(30) NOT NULL,
	Endereco VarChar(50) NOT NULL,
	Numero VarChar(10) NOT NULL,
	Bairro VarChar(50) NOT NULL,
	Cidade VarChar(50) NOT NULL,
	CEP VarChar(13) NOT NULL,
	Credito Real,
	DataCadastro TimesTamp NOT NULL,
	Clasificacao Integer NOT NULL,
	CPF_CNPJ VarChar(14) NOT NULL,
	TipoPessoa Integer NOT NULL,
	Primary Key (Codigo),
    Constraint FK_PESSOA_USUARIO Foreign Key (CodigoUsuario) references Usuario (Codigo)
);

create table FormaPagamento(
	Codigo Serial NOT NULL,
	Nome VarChar(50) NOT NULL,
	Tipo Integer NOT NULL,
    Primary Key (Codigo)
);

create table Venda(
	Codigo Serial NOT NULL,
	Pessoa Integer NOT NULL,
	DataVenda TimesTamp NOT NULL,
	ValorTotal Real NOT NULL,
	DescontoAcrescimo Real,
	TotalLiquido Real NOT NULL,
	ValorFrete Real,
	RealizaEntrega Integer NOT NULL,
	Pagamento Integer NOT NULL, 
	Primary Key (Codigo),
    Constraint FK_VENDA_PESSOA Foreign Key (Pessoa) references Pessoa(Codigo),
    Constraint FK_VENDA_FPEG Foreign Key (Pagamento) references FormaPagamento(Codigo)
);

create table Plataforma(
	Codigo Serial NOT NULL,
	Nome VarChar(50) NOT NULL,
	Primary Key (Codigo)
);

create table Classificacao(
	Codigo Serial NOT NULL,
	Nome VarChar(50) NOT NULL,
	Primary Key (Codigo)
);

create table Produto(
	Codigo Serial NOT NULL,
	Nome VarChar(50) NOT NULL,
	Estoque Integer NOT NULL,
	Classificacao Integer NOT NULL,
    Plataforma Integer NOT NULL,
	DataLancamento Date NOT NULL,
	Variacao Integer NOT NULL,
	Valor Real NOT NULL,
	Primary Key (Codigo),
    Constraint FK_PRODUTO_CLASIF Foreign Key (Classificacao) references Classificacao(Codigo),
    constraint FK_PRODUTO_PLATAFORMA Foreign Key (Plataforma) references Plataforma(Codigo)
);

create table Entrega(
	Codigo Serial NOT NULL,
	PrevisaoEntrega TimesTamp NOT NULL,
	Status Integer NOT NULL,
	DataEntrega TimesTamp,
	Responsavel Integer NOT NULL,
	Primary Key (Codigo)
);

create table VendaItem(
	Codigo Serial NOT NULL,
	CodigoVenda Integer NOT NULL,
	CodigoProduto Integer NOT NULL,
	Quantidade Integer NOT NULL,
	ValorUnitario Real NOT NULL,
	ValorTotal Real NOT NULL,
	AcrescimoDesconto Real,
	ValorLiquido Real NOT NULL,
	Primary Key (Codigo, CodigoVenda),
    Constraint FK_VENDAITEM_VENDA Foreign Key (CodigoVenda) references Venda(Codigo),
    Constraint FK_VENDAITEM_PRODUTO Foreign Key (CodigoProduto) references Produto(Codigo)
);

create table VendaEntega(
	CodigoVenda Integer NOT NULL,
	CodigoEntrega Integer NOT NULL,
    Primary Key (CodigoVenda, CodigoEntrega),
    Constraint FK_UNIOIN_VENDA Foreign Key (CodigoVenda) references Venda(Codigo),
    Constraint FK_UNIOIN_ENTREGA Foreign Key (CodigoEntrega) references Entrega(Codigo)
);
