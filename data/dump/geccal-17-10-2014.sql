--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.8
-- Dumped by pg_dump version 9.2.8
-- Started on 2014-10-17 16:00:49 BRT

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 210 (class 3079 OID 12648)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 3067 (class 0 OID 0)
-- Dependencies: 210
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- TOC entry 168 (class 1259 OID 26084)
-- Name: autor_id_autor_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE autor_id_autor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.autor_id_autor_seq OWNER TO postgres;

--
-- TOC entry 169 (class 1259 OID 26086)
-- Name: classificacao_id_classificacao_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE classificacao_id_classificacao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.classificacao_id_classificacao_seq OWNER TO postgres;

--
-- TOC entry 170 (class 1259 OID 26088)
-- Name: desativacao_usuario_id_desativacao_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE desativacao_usuario_id_desativacao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.desativacao_usuario_id_desativacao_seq OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 171 (class 1259 OID 26090)
-- Name: desativacao_usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE desativacao_usuario (
    id_desativacao integer DEFAULT nextval('desativacao_usuario_id_desativacao_seq'::regclass) NOT NULL,
    dt_desativacao date NOT NULL,
    no_motivo_desat text NOT NULL,
    st_ativo boolean NOT NULL,
    no_motivo_ativacao text,
    dt_ativacao date,
    id_usuario integer NOT NULL
);


ALTER TABLE public.desativacao_usuario OWNER TO postgres;

--
-- TOC entry 172 (class 1259 OID 26099)
-- Name: editora_id_editora_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE editora_id_editora_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.editora_id_editora_seq OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 26101)
-- Name: email_id_email_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE email_id_email_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.email_id_email_seq OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 26103)
-- Name: email; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE email (
    id_email integer DEFAULT nextval('email_id_email_seq'::regclass) NOT NULL,
    email text NOT NULL,
    st_ativo boolean NOT NULL,
    id_pessoa integer
);


ALTER TABLE public.email OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 26112)
-- Name: emprestimo_id_emprestimo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE emprestimo_id_emprestimo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.emprestimo_id_emprestimo_seq OWNER TO postgres;

--
-- TOC entry 176 (class 1259 OID 26114)
-- Name: espirito_id_espirito_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE espirito_id_espirito_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.espirito_id_espirito_seq OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 26116)
-- Name: funcao_atividade_id_funcao_atividade_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE funcao_atividade_id_funcao_atividade_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.funcao_atividade_id_funcao_atividade_seq OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 26118)
-- Name: funcao_atividade; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE funcao_atividade (
    id_funcao_atividade integer DEFAULT nextval('funcao_atividade_id_funcao_atividade_seq'::regclass) NOT NULL,
    no_funcao_atividade text NOT NULL,
    st_ativo boolean NOT NULL
);


ALTER TABLE public.funcao_atividade OWNER TO postgres;

--
-- TOC entry 179 (class 1259 OID 26127)
-- Name: funcionalidade_id_funcionalidade_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE funcionalidade_id_funcionalidade_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.funcionalidade_id_funcionalidade_seq OWNER TO postgres;

--
-- TOC entry 180 (class 1259 OID 26129)
-- Name: funcionalidade; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE funcionalidade (
    id_funcionalidade integer DEFAULT nextval('funcionalidade_id_funcionalidade_seq'::regclass) NOT NULL,
    no_funcionalidade character varying(45) NOT NULL,
    dt_cadastro date NOT NULL,
    st_ativo boolean NOT NULL,
    no_menu character varying(45),
    id_tipo_funcionalidade integer NOT NULL,
    id_submodulo integer NOT NULL
);


ALTER TABLE public.funcionalidade OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 26135)
-- Name: funcionalidade_perfil; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE funcionalidade_perfil (
    id_funcionalidade integer NOT NULL,
    id_perfil integer NOT NULL
);


ALTER TABLE public.funcionalidade_perfil OWNER TO postgres;

--
-- TOC entry 182 (class 1259 OID 26140)
-- Name: grupo_estudo_id_grupo_estudo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE grupo_estudo_id_grupo_estudo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.grupo_estudo_id_grupo_estudo_seq OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 26142)
-- Name: historico_id_historico_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE historico_id_historico_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.historico_id_historico_seq OWNER TO postgres;

--
-- TOC entry 184 (class 1259 OID 26144)
-- Name: historico; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE historico (
    id_historico integer DEFAULT nextval('historico_id_historico_seq'::regclass) NOT NULL,
    dt_cadastro date NOT NULL,
    no_acao text NOT NULL,
    st_ativo boolean NOT NULL,
    id_usuario integer NOT NULL
);


ALTER TABLE public.historico OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 26153)
-- Name: indexacao_id_indexacao_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE indexacao_id_indexacao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.indexacao_id_indexacao_seq OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 26155)
-- Name: livro_id_livro_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE livro_id_livro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.livro_id_livro_seq OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 26157)
-- Name: midia_id_midia_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE midia_id_midia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.midia_id_midia_seq OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 26159)
-- Name: modulo_id_modulo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE modulo_id_modulo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.modulo_id_modulo_seq OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 26161)
-- Name: modulo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE modulo (
    id_modulo integer DEFAULT nextval('modulo_id_modulo_seq'::regclass) NOT NULL,
    no_modulo character varying(45) NOT NULL,
    dt_cadastro date NOT NULL,
    no_menu character varying(45) NOT NULL,
    st_ativo boolean NOT NULL,
    no_img text,
    no_descricao text
);


ALTER TABLE public.modulo OWNER TO postgres;

--
-- TOC entry 190 (class 1259 OID 26170)
-- Name: origem_id_origem_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE origem_id_origem_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.origem_id_origem_seq OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 26172)
-- Name: perfil_id_perfil_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE perfil_id_perfil_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.perfil_id_perfil_seq OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 26174)
-- Name: perfil; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE perfil (
    id_perfil integer DEFAULT nextval('perfil_id_perfil_seq'::regclass) NOT NULL,
    no_perfil character varying(45) NOT NULL,
    st_ativo boolean NOT NULL
);


ALTER TABLE public.perfil OWNER TO postgres;

--
-- TOC entry 193 (class 1259 OID 26180)
-- Name: pessoa_id_pessoa_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pessoa_id_pessoa_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pessoa_id_pessoa_seq OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 26192)
-- Name: pessoa; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pessoa (
    id_pessoa integer DEFAULT nextval('pessoa_id_pessoa_seq'::regclass) NOT NULL,
    no_pessoa character varying(100) NOT NULL,
    dt_cadastro date NOT NULL,
    st_ativo boolean NOT NULL,
    no_endereco text,
    no_bairro character varying(45),
    nu_cep integer,
    no_cidade character varying(80)
);


ALTER TABLE public.pessoa OWNER TO postgres;

--
-- TOC entry 194 (class 1259 OID 26182)
-- Name: pessoa_fisica; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pessoa_fisica (
    id_pessoa_fisica integer NOT NULL,
    dt_nascimento date,
    nu_cpf integer,
    no_sexo character varying(45) NOT NULL
);


ALTER TABLE public.pessoa_fisica OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 26187)
-- Name: pessoa_fisica_funcao_atividade; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pessoa_fisica_funcao_atividade (
    id_pessoa_fisica integer NOT NULL,
    id_funcao_atividade integer NOT NULL
);


ALTER TABLE public.pessoa_fisica_funcao_atividade OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 26201)
-- Name: pessoa_juridica; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pessoa_juridica (
    id_pessoa_juridica integer NOT NULL,
    sg_empresa character varying(45),
    nu_cnpj integer,
    no_fantasia text
);


ALTER TABLE public.pessoa_juridica OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 26209)
-- Name: pessoa_turma_id_pessoa_turma_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pessoa_turma_id_pessoa_turma_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pessoa_turma_id_pessoa_turma_seq OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 26211)
-- Name: submodulo_id_submodulo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE submodulo_id_submodulo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.submodulo_id_submodulo_seq OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 26213)
-- Name: submodulo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE submodulo (
    id_submodulo integer DEFAULT nextval('submodulo_id_submodulo_seq'::regclass) NOT NULL,
    no_submodulo character varying(45) NOT NULL,
    no_menu character varying(45) NOT NULL,
    dt_cadastro date NOT NULL,
    st_ativo boolean NOT NULL,
    no_img text,
    id_modulo integer NOT NULL
);


ALTER TABLE public.submodulo OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 26222)
-- Name: telefone_id_telefone_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE telefone_id_telefone_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.telefone_id_telefone_seq OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 26224)
-- Name: telefone; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE telefone (
    id_telefone integer DEFAULT nextval('telefone_id_telefone_seq'::regclass) NOT NULL,
    nu_telefone integer NOT NULL,
    st_ativo boolean NOT NULL,
    id_pessoa integer NOT NULL,
    id_tipo_telefone integer NOT NULL
);


ALTER TABLE public.telefone OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 26230)
-- Name: tipo_funcionalidade_id_tipo_funcionalidade_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_funcionalidade_id_tipo_funcionalidade_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipo_funcionalidade_id_tipo_funcionalidade_seq OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 26232)
-- Name: tipo_funcionalidade; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_funcionalidade (
    id_tipo_funcionalidade integer DEFAULT nextval('tipo_funcionalidade_id_tipo_funcionalidade_seq'::regclass) NOT NULL,
    no_tipo_funcionalidade character varying(45) NOT NULL,
    st_ativo boolean NOT NULL
);


ALTER TABLE public.tipo_funcionalidade OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 26238)
-- Name: tipo_grupo_id_tipo_grupo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_grupo_id_tipo_grupo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipo_grupo_id_tipo_grupo_seq OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 26240)
-- Name: tipo_telefone_id_tipo_telefone_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_telefone_id_tipo_telefone_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipo_telefone_id_tipo_telefone_seq OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 26242)
-- Name: tipo_telefone; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_telefone (
    id_tipo_telefone integer DEFAULT nextval('tipo_telefone_id_tipo_telefone_seq'::regclass) NOT NULL,
    no_tipo_telefone character varying(45) NOT NULL,
    st_ativo boolean NOT NULL
);


ALTER TABLE public.tipo_telefone OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 26248)
-- Name: turma_id_turma_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE turma_id_turma_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.turma_id_turma_seq OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 26250)
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    id_usuario integer NOT NULL,
    dt_cadastro date NOT NULL,
    dt_ult_visita timestamp without time zone,
    st_ativo boolean NOT NULL,
    no_usuario character varying(45) NOT NULL,
    no_senha text NOT NULL,
    id_perfil integer NOT NULL,
    st_cookie text
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- TOC entry 3069 (class 0 OID 0)
-- Dependencies: 168
-- Name: autor_id_autor_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('autor_id_autor_seq', 1, false);


--
-- TOC entry 3070 (class 0 OID 0)
-- Dependencies: 169
-- Name: classificacao_id_classificacao_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('classificacao_id_classificacao_seq', 1, false);


--
-- TOC entry 3021 (class 0 OID 26090)
-- Dependencies: 171
-- Data for Name: desativacao_usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY desativacao_usuario (id_desativacao, dt_desativacao, no_motivo_desat, st_ativo, no_motivo_ativacao, dt_ativacao, id_usuario) FROM stdin;
\.


--
-- TOC entry 3071 (class 0 OID 0)
-- Dependencies: 170
-- Name: desativacao_usuario_id_desativacao_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('desativacao_usuario_id_desativacao_seq', 1, false);


--
-- TOC entry 3072 (class 0 OID 0)
-- Dependencies: 172
-- Name: editora_id_editora_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('editora_id_editora_seq', 1, false);


--
-- TOC entry 3024 (class 0 OID 26103)
-- Dependencies: 174
-- Data for Name: email; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY email (id_email, email, st_ativo, id_pessoa) FROM stdin;
\.


--
-- TOC entry 3073 (class 0 OID 0)
-- Dependencies: 173
-- Name: email_id_email_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('email_id_email_seq', 1, false);


--
-- TOC entry 3074 (class 0 OID 0)
-- Dependencies: 175
-- Name: emprestimo_id_emprestimo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('emprestimo_id_emprestimo_seq', 1, false);


--
-- TOC entry 3075 (class 0 OID 0)
-- Dependencies: 176
-- Name: espirito_id_espirito_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('espirito_id_espirito_seq', 1, false);


--
-- TOC entry 3028 (class 0 OID 26118)
-- Dependencies: 178
-- Data for Name: funcao_atividade; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY funcao_atividade (id_funcao_atividade, no_funcao_atividade, st_ativo) FROM stdin;
8	asdad	t
9	teste sistema	t
10	ajax	t
\.


--
-- TOC entry 3076 (class 0 OID 0)
-- Dependencies: 177
-- Name: funcao_atividade_id_funcao_atividade_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('funcao_atividade_id_funcao_atividade_seq', 10, true);


--
-- TOC entry 3030 (class 0 OID 26129)
-- Dependencies: 180
-- Data for Name: funcionalidade; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY funcionalidade (id_funcionalidade, no_funcionalidade, dt_cadastro, st_ativo, no_menu, id_tipo_funcionalidade, id_submodulo) FROM stdin;
1	Listar Função Atividade	2014-09-04	t	Listar	1	1
2	Editar	2014-09-05	t	\N	2	1
4	Cadastrar	2014-09-05	t	Cadastrar	3	1
3	Excluir	2014-09-05	t	\N	4	1
7	Listar Usuário	2014-09-05	t	Listar	1	4
\.


--
-- TOC entry 3077 (class 0 OID 0)
-- Dependencies: 179
-- Name: funcionalidade_id_funcionalidade_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('funcionalidade_id_funcionalidade_seq', 7, true);


--
-- TOC entry 3031 (class 0 OID 26135)
-- Dependencies: 181
-- Data for Name: funcionalidade_perfil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY funcionalidade_perfil (id_funcionalidade, id_perfil) FROM stdin;
1	1
2	1
3	1
4	1
7	1
\.


--
-- TOC entry 3078 (class 0 OID 0)
-- Dependencies: 182
-- Name: grupo_estudo_id_grupo_estudo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('grupo_estudo_id_grupo_estudo_seq', 1, false);


--
-- TOC entry 3034 (class 0 OID 26144)
-- Dependencies: 184
-- Data for Name: historico; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY historico (id_historico, dt_cadastro, no_acao, st_ativo, id_usuario) FROM stdin;
\.


--
-- TOC entry 3079 (class 0 OID 0)
-- Dependencies: 183
-- Name: historico_id_historico_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('historico_id_historico_seq', 1, false);


--
-- TOC entry 3080 (class 0 OID 0)
-- Dependencies: 185
-- Name: indexacao_id_indexacao_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('indexacao_id_indexacao_seq', 1, false);


--
-- TOC entry 3081 (class 0 OID 0)
-- Dependencies: 186
-- Name: livro_id_livro_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('livro_id_livro_seq', 1, false);


--
-- TOC entry 3082 (class 0 OID 0)
-- Dependencies: 187
-- Name: midia_id_midia_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('midia_id_midia_seq', 1, false);


--
-- TOC entry 3039 (class 0 OID 26161)
-- Dependencies: 189
-- Data for Name: modulo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY modulo (id_modulo, no_modulo, dt_cadastro, no_menu, st_ativo, no_img, no_descricao) FROM stdin;
1	admin	2014-09-14	Administração	t	\N	\N
\.


--
-- TOC entry 3083 (class 0 OID 0)
-- Dependencies: 188
-- Name: modulo_id_modulo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('modulo_id_modulo_seq', 1, true);


--
-- TOC entry 3084 (class 0 OID 0)
-- Dependencies: 190
-- Name: origem_id_origem_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('origem_id_origem_seq', 1, false);


--
-- TOC entry 3042 (class 0 OID 26174)
-- Dependencies: 192
-- Data for Name: perfil; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY perfil (id_perfil, no_perfil, st_ativo) FROM stdin;
1	Administrador	t
\.


--
-- TOC entry 3085 (class 0 OID 0)
-- Dependencies: 191
-- Name: perfil_id_perfil_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('perfil_id_perfil_seq', 1, true);


--
-- TOC entry 3046 (class 0 OID 26192)
-- Dependencies: 196
-- Data for Name: pessoa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pessoa (id_pessoa, no_pessoa, dt_cadastro, st_ativo, no_endereco, no_bairro, nu_cep, no_cidade) FROM stdin;
1	Geccal	2014-07-24	t	\N	\N	\N	\N
\.


--
-- TOC entry 3044 (class 0 OID 26182)
-- Dependencies: 194
-- Data for Name: pessoa_fisica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pessoa_fisica (id_pessoa_fisica, dt_nascimento, nu_cpf, no_sexo) FROM stdin;
1	\N	\N	Masculino
\.


--
-- TOC entry 3045 (class 0 OID 26187)
-- Dependencies: 195
-- Data for Name: pessoa_fisica_funcao_atividade; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pessoa_fisica_funcao_atividade (id_pessoa_fisica, id_funcao_atividade) FROM stdin;
\.


--
-- TOC entry 3086 (class 0 OID 0)
-- Dependencies: 193
-- Name: pessoa_id_pessoa_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pessoa_id_pessoa_seq', 1, true);


--
-- TOC entry 3047 (class 0 OID 26201)
-- Dependencies: 197
-- Data for Name: pessoa_juridica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY pessoa_juridica (id_pessoa_juridica, sg_empresa, nu_cnpj, no_fantasia) FROM stdin;
\.


--
-- TOC entry 3087 (class 0 OID 0)
-- Dependencies: 198
-- Name: pessoa_turma_id_pessoa_turma_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pessoa_turma_id_pessoa_turma_seq', 1, false);


--
-- TOC entry 3050 (class 0 OID 26213)
-- Dependencies: 200
-- Data for Name: submodulo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY submodulo (id_submodulo, no_submodulo, no_menu, dt_cadastro, st_ativo, no_img, id_modulo) FROM stdin;
1	funcao-atividade	Função Atividade	2014-09-04	t	fa fa-user-md	1
4	usuario	Usuário	2014-09-05	t	fa fa-user-md	1
\.


--
-- TOC entry 3088 (class 0 OID 0)
-- Dependencies: 199
-- Name: submodulo_id_submodulo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('submodulo_id_submodulo_seq', 4, true);


--
-- TOC entry 3052 (class 0 OID 26224)
-- Dependencies: 202
-- Data for Name: telefone; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY telefone (id_telefone, nu_telefone, st_ativo, id_pessoa, id_tipo_telefone) FROM stdin;
\.


--
-- TOC entry 3089 (class 0 OID 0)
-- Dependencies: 201
-- Name: telefone_id_telefone_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('telefone_id_telefone_seq', 1, false);


--
-- TOC entry 3054 (class 0 OID 26232)
-- Dependencies: 204
-- Data for Name: tipo_funcionalidade; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_funcionalidade (id_tipo_funcionalidade, no_tipo_funcionalidade, st_ativo) FROM stdin;
1	listar	t
2	editar	t
3	cadastrar	t
4	excluir	t
\.


--
-- TOC entry 3090 (class 0 OID 0)
-- Dependencies: 203
-- Name: tipo_funcionalidade_id_tipo_funcionalidade_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipo_funcionalidade_id_tipo_funcionalidade_seq', 4, true);


--
-- TOC entry 3091 (class 0 OID 0)
-- Dependencies: 205
-- Name: tipo_grupo_id_tipo_grupo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipo_grupo_id_tipo_grupo_seq', 1, false);


--
-- TOC entry 3057 (class 0 OID 26242)
-- Dependencies: 207
-- Data for Name: tipo_telefone; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_telefone (id_tipo_telefone, no_tipo_telefone, st_ativo) FROM stdin;
\.


--
-- TOC entry 3092 (class 0 OID 0)
-- Dependencies: 206
-- Name: tipo_telefone_id_tipo_telefone_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipo_telefone_id_tipo_telefone_seq', 1, false);


--
-- TOC entry 3093 (class 0 OID 0)
-- Dependencies: 208
-- Name: turma_id_turma_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('turma_id_turma_seq', 1, false);


--
-- TOC entry 3059 (class 0 OID 26250)
-- Dependencies: 209
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario (id_usuario, dt_cadastro, dt_ult_visita, st_ativo, no_usuario, no_senha, id_perfil, st_cookie) FROM stdin;
1	2014-07-24	\N	t	geccal	$2y$11$R3J1cG8gRXNww61yaXRhI.yRc.6Ifny/cW3XBoGoOh4tKEbTqyRKS	1	\N
\.


--
-- TOC entry 2887 (class 2606 OID 26221)
-- Name: controller_id_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY submodulo
    ADD CONSTRAINT controller_id_pk PRIMARY KEY (id_submodulo);


--
-- TOC entry 2863 (class 2606 OID 26098)
-- Name: desativacao_usuario_id_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY desativacao_usuario
    ADD CONSTRAINT desativacao_usuario_id_pk PRIMARY KEY (id_desativacao);


--
-- TOC entry 2865 (class 2606 OID 26111)
-- Name: email_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY email
    ADD CONSTRAINT email_pk PRIMARY KEY (id_email);


--
-- TOC entry 2867 (class 2606 OID 26126)
-- Name: funcao_atividade_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY funcao_atividade
    ADD CONSTRAINT funcao_atividade_pk PRIMARY KEY (id_funcao_atividade);


--
-- TOC entry 2869 (class 2606 OID 26134)
-- Name: funcionalidade_id_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY funcionalidade
    ADD CONSTRAINT funcionalidade_id_pk PRIMARY KEY (id_funcionalidade);


--
-- TOC entry 2871 (class 2606 OID 26139)
-- Name: funcionalidade_perfil_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY funcionalidade_perfil
    ADD CONSTRAINT funcionalidade_perfil_pk PRIMARY KEY (id_funcionalidade, id_perfil);


--
-- TOC entry 2873 (class 2606 OID 26152)
-- Name: historico_id_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY historico
    ADD CONSTRAINT historico_id_pk PRIMARY KEY (id_historico);


--
-- TOC entry 2875 (class 2606 OID 26169)
-- Name: modulo_id_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY modulo
    ADD CONSTRAINT modulo_id_pk PRIMARY KEY (id_modulo);


--
-- TOC entry 2877 (class 2606 OID 26179)
-- Name: perfil_id_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY perfil
    ADD CONSTRAINT perfil_id_pk PRIMARY KEY (id_perfil);


--
-- TOC entry 2881 (class 2606 OID 26191)
-- Name: pessoa_fisica_funcao_atividade_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pessoa_fisica_funcao_atividade
    ADD CONSTRAINT pessoa_fisica_funcao_atividade_pk PRIMARY KEY (id_pessoa_fisica, id_funcao_atividade);


--
-- TOC entry 2879 (class 2606 OID 26186)
-- Name: pessoa_fisica_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pessoa_fisica
    ADD CONSTRAINT pessoa_fisica_pk PRIMARY KEY (id_pessoa_fisica);


--
-- TOC entry 2883 (class 2606 OID 26200)
-- Name: pessoa_id_pessoa_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pessoa
    ADD CONSTRAINT pessoa_id_pessoa_pk PRIMARY KEY (id_pessoa);


--
-- TOC entry 2885 (class 2606 OID 26208)
-- Name: pessoa_juridica_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pessoa_juridica
    ADD CONSTRAINT pessoa_juridica_pk PRIMARY KEY (id_pessoa_juridica);


--
-- TOC entry 2889 (class 2606 OID 26229)
-- Name: telefone_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY telefone
    ADD CONSTRAINT telefone_pk PRIMARY KEY (id_telefone);


--
-- TOC entry 2891 (class 2606 OID 26237)
-- Name: tipo_funcionalidade_id_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_funcionalidade
    ADD CONSTRAINT tipo_funcionalidade_id_pk PRIMARY KEY (id_tipo_funcionalidade);


--
-- TOC entry 2893 (class 2606 OID 26247)
-- Name: tipo_telefone_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_telefone
    ADD CONSTRAINT tipo_telefone_pk PRIMARY KEY (id_tipo_telefone);


--
-- TOC entry 2895 (class 2606 OID 26257)
-- Name: usuario_pk; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pk PRIMARY KEY (id_usuario);


--
-- TOC entry 2904 (class 2606 OID 26298)
-- Name: funcao_atividade_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pessoa_fisica_funcao_atividade
    ADD CONSTRAINT funcao_atividade_fk FOREIGN KEY (id_funcao_atividade) REFERENCES funcao_atividade(id_funcao_atividade) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2900 (class 2606 OID 26278)
-- Name: funcionalidade_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY funcionalidade_perfil
    ADD CONSTRAINT funcionalidade_fk FOREIGN KEY (id_funcionalidade) REFERENCES funcionalidade(id_funcionalidade) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2907 (class 2606 OID 26313)
-- Name: modulo_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY submodulo
    ADD CONSTRAINT modulo_fk FOREIGN KEY (id_modulo) REFERENCES modulo(id_modulo) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2901 (class 2606 OID 26283)
-- Name: perfil_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY funcionalidade_perfil
    ADD CONSTRAINT perfil_fk FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2910 (class 2606 OID 26328)
-- Name: perfil_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT perfil_fk FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2905 (class 2606 OID 26303)
-- Name: pessoa_fisica_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pessoa_fisica_funcao_atividade
    ADD CONSTRAINT pessoa_fisica_fk FOREIGN KEY (id_pessoa_fisica) REFERENCES pessoa_fisica(id_pessoa_fisica) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2911 (class 2606 OID 26333)
-- Name: pessoa_fisica_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT pessoa_fisica_fk FOREIGN KEY (id_usuario) REFERENCES pessoa_fisica(id_pessoa_fisica) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2897 (class 2606 OID 26263)
-- Name: pessoa_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY email
    ADD CONSTRAINT pessoa_fk FOREIGN KEY (id_pessoa) REFERENCES pessoa(id_pessoa) MATCH FULL ON UPDATE CASCADE ON DELETE SET NULL;


--
-- TOC entry 2903 (class 2606 OID 26293)
-- Name: pessoa_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pessoa_fisica
    ADD CONSTRAINT pessoa_fk FOREIGN KEY (id_pessoa_fisica) REFERENCES pessoa(id_pessoa) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2906 (class 2606 OID 26308)
-- Name: pessoa_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pessoa_juridica
    ADD CONSTRAINT pessoa_fk FOREIGN KEY (id_pessoa_juridica) REFERENCES pessoa(id_pessoa) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2908 (class 2606 OID 26318)
-- Name: pessoa_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY telefone
    ADD CONSTRAINT pessoa_fk FOREIGN KEY (id_pessoa) REFERENCES pessoa(id_pessoa) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2898 (class 2606 OID 26268)
-- Name: submodulo_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY funcionalidade
    ADD CONSTRAINT submodulo_fk FOREIGN KEY (id_submodulo) REFERENCES submodulo(id_submodulo) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2899 (class 2606 OID 26273)
-- Name: tipo_funcionalidade_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY funcionalidade
    ADD CONSTRAINT tipo_funcionalidade_fk FOREIGN KEY (id_tipo_funcionalidade) REFERENCES tipo_funcionalidade(id_tipo_funcionalidade) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2909 (class 2606 OID 26323)
-- Name: tipo_telefone_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY telefone
    ADD CONSTRAINT tipo_telefone_fk FOREIGN KEY (id_tipo_telefone) REFERENCES tipo_telefone(id_tipo_telefone) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2896 (class 2606 OID 26258)
-- Name: usuario_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY desativacao_usuario
    ADD CONSTRAINT usuario_fk FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 2902 (class 2606 OID 26288)
-- Name: usuario_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historico
    ADD CONSTRAINT usuario_fk FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- TOC entry 3066 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- TOC entry 3068 (class 0 OID 0)
-- Dependencies: 196
-- Name: pessoa.id_pessoa; Type: ACL; Schema: public; Owner: postgres
--

REVOKE ALL(id_pessoa) ON TABLE pessoa FROM PUBLIC;
REVOKE ALL(id_pessoa) ON TABLE pessoa FROM postgres;
GRANT REFERENCES(id_pessoa) ON TABLE pessoa TO postgres;


-- Completed on 2014-10-17 16:00:49 BRT

--
-- PostgreSQL database dump complete
--

