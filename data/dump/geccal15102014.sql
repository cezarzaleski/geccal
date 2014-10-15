PGDMP                     	    r            geccal    9.2.8    9.2.8 ~    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           1262    26083    geccal    DATABASE     x   CREATE DATABASE geccal WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'pt_BR.UTF-8' LC_CTYPE = 'pt_BR.UTF-8';
    DROP DATABASE geccal;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    5            �           0    0    public    ACL     �   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                  postgres    false    5            �            3079    12648    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    210            �            1259    26084    autor_id_autor_seq    SEQUENCE     t   CREATE SEQUENCE autor_id_autor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.autor_id_autor_seq;
       public       postgres    false    5            �            1259    26086 "   classificacao_id_classificacao_seq    SEQUENCE     �   CREATE SEQUENCE classificacao_id_classificacao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.classificacao_id_classificacao_seq;
       public       postgres    false    5            �            1259    26088 &   desativacao_usuario_id_desativacao_seq    SEQUENCE     �   CREATE SEQUENCE desativacao_usuario_id_desativacao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 =   DROP SEQUENCE public.desativacao_usuario_id_desativacao_seq;
       public       postgres    false    5            �            1259    26090    desativacao_usuario    TABLE     F  CREATE TABLE desativacao_usuario (
    id_desativacao integer DEFAULT nextval('desativacao_usuario_id_desativacao_seq'::regclass) NOT NULL,
    dt_desativacao date NOT NULL,
    no_motivo_desat text NOT NULL,
    st_ativo boolean NOT NULL,
    no_motivo_ativacao text,
    dt_ativacao date,
    id_usuario integer NOT NULL
);
 '   DROP TABLE public.desativacao_usuario;
       public         postgres    false    170    5            �            1259    26099    editora_id_editora_seq    SEQUENCE     x   CREATE SEQUENCE editora_id_editora_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.editora_id_editora_seq;
       public       postgres    false    5            �            1259    26101    email_id_email_seq    SEQUENCE     t   CREATE SEQUENCE email_id_email_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.email_id_email_seq;
       public       postgres    false    5            �            1259    26103    email    TABLE     �   CREATE TABLE email (
    id_email integer DEFAULT nextval('email_id_email_seq'::regclass) NOT NULL,
    email text NOT NULL,
    st_ativo boolean NOT NULL,
    id_pessoa integer
);
    DROP TABLE public.email;
       public         postgres    false    173    5            �            1259    26112    emprestimo_id_emprestimo_seq    SEQUENCE     ~   CREATE SEQUENCE emprestimo_id_emprestimo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.emprestimo_id_emprestimo_seq;
       public       postgres    false    5            �            1259    26114    espirito_id_espirito_seq    SEQUENCE     z   CREATE SEQUENCE espirito_id_espirito_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.espirito_id_espirito_seq;
       public       postgres    false    5            �            1259    26116 (   funcao_atividade_id_funcao_atividade_seq    SEQUENCE     �   CREATE SEQUENCE funcao_atividade_id_funcao_atividade_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ?   DROP SEQUENCE public.funcao_atividade_id_funcao_atividade_seq;
       public       postgres    false    5            �            1259    26118    funcao_atividade    TABLE     �   CREATE TABLE funcao_atividade (
    id_funcao_atividade integer DEFAULT nextval('funcao_atividade_id_funcao_atividade_seq'::regclass) NOT NULL,
    no_funcao_atividade text NOT NULL,
    st_ativo boolean NOT NULL
);
 $   DROP TABLE public.funcao_atividade;
       public         postgres    false    177    5            �            1259    26127 $   funcionalidade_id_funcionalidade_seq    SEQUENCE     �   CREATE SEQUENCE funcionalidade_id_funcionalidade_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ;   DROP SEQUENCE public.funcionalidade_id_funcionalidade_seq;
       public       postgres    false    5            �            1259    26129    funcionalidade    TABLE     q  CREATE TABLE funcionalidade (
    id_funcionalidade integer DEFAULT nextval('funcionalidade_id_funcionalidade_seq'::regclass) NOT NULL,
    no_funcionalidade character varying(45) NOT NULL,
    dt_cadastro date NOT NULL,
    st_ativo boolean NOT NULL,
    no_menu character varying(45),
    id_tipo_funcionalidade integer NOT NULL,
    id_submodulo integer NOT NULL
);
 "   DROP TABLE public.funcionalidade;
       public         postgres    false    179    5            �            1259    26135    funcionalidade_perfil    TABLE     o   CREATE TABLE funcionalidade_perfil (
    id_funcionalidade integer NOT NULL,
    id_perfil integer NOT NULL
);
 )   DROP TABLE public.funcionalidade_perfil;
       public         postgres    false    5            �            1259    26140     grupo_estudo_id_grupo_estudo_seq    SEQUENCE     �   CREATE SEQUENCE grupo_estudo_id_grupo_estudo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.grupo_estudo_id_grupo_estudo_seq;
       public       postgres    false    5            �            1259    26142    historico_id_historico_seq    SEQUENCE     |   CREATE SEQUENCE historico_id_historico_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.historico_id_historico_seq;
       public       postgres    false    5            �            1259    26144 	   historico    TABLE     �   CREATE TABLE historico (
    id_historico integer DEFAULT nextval('historico_id_historico_seq'::regclass) NOT NULL,
    dt_cadastro date NOT NULL,
    no_acao text NOT NULL,
    st_ativo boolean NOT NULL,
    id_usuario integer NOT NULL
);
    DROP TABLE public.historico;
       public         postgres    false    183    5            �            1259    26153    indexacao_id_indexacao_seq    SEQUENCE     |   CREATE SEQUENCE indexacao_id_indexacao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.indexacao_id_indexacao_seq;
       public       postgres    false    5            �            1259    26155    livro_id_livro_seq    SEQUENCE     t   CREATE SEQUENCE livro_id_livro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.livro_id_livro_seq;
       public       postgres    false    5            �            1259    26157    midia_id_midia_seq    SEQUENCE     t   CREATE SEQUENCE midia_id_midia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.midia_id_midia_seq;
       public       postgres    false    5            �            1259    26159    modulo_id_modulo_seq    SEQUENCE     v   CREATE SEQUENCE modulo_id_modulo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.modulo_id_modulo_seq;
       public       postgres    false    5            �            1259    26161    modulo    TABLE     *  CREATE TABLE modulo (
    id_modulo integer DEFAULT nextval('modulo_id_modulo_seq'::regclass) NOT NULL,
    no_modulo character varying(45) NOT NULL,
    dt_cadastro date NOT NULL,
    no_menu character varying(45) NOT NULL,
    st_ativo boolean NOT NULL,
    no_img text,
    no_descricao text
);
    DROP TABLE public.modulo;
       public         postgres    false    188    5            �            1259    26170    origem_id_origem_seq    SEQUENCE     v   CREATE SEQUENCE origem_id_origem_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.origem_id_origem_seq;
       public       postgres    false    5            �            1259    26172    perfil_id_perfil_seq    SEQUENCE     v   CREATE SEQUENCE perfil_id_perfil_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.perfil_id_perfil_seq;
       public       postgres    false    5            �            1259    26174    perfil    TABLE     �   CREATE TABLE perfil (
    id_perfil integer DEFAULT nextval('perfil_id_perfil_seq'::regclass) NOT NULL,
    no_perfil character varying(45) NOT NULL,
    st_ativo boolean NOT NULL
);
    DROP TABLE public.perfil;
       public         postgres    false    191    5            �            1259    26180    pessoa_id_pessoa_seq    SEQUENCE     v   CREATE SEQUENCE pessoa_id_pessoa_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.pessoa_id_pessoa_seq;
       public       postgres    false    5            �            1259    26192    pessoa    TABLE     K  CREATE TABLE pessoa (
    id_pessoa integer DEFAULT nextval('pessoa_id_pessoa_seq'::regclass) NOT NULL,
    no_pessoa character varying(100) NOT NULL,
    dt_cadastro date NOT NULL,
    st_ativo boolean NOT NULL,
    no_endereco text,
    no_bairro character varying(45),
    nu_cep integer,
    no_cidade character varying(80)
);
    DROP TABLE public.pessoa;
       public         postgres    false    193    5            �           0    0    pessoa.id_pessoa    ACL     �   REVOKE ALL(id_pessoa) ON TABLE pessoa FROM PUBLIC;
REVOKE ALL(id_pessoa) ON TABLE pessoa FROM postgres;
GRANT REFERENCES(id_pessoa) ON TABLE pessoa TO postgres;
            public       postgres    false    196            �            1259    26182    pessoa_fisica    TABLE     �   CREATE TABLE pessoa_fisica (
    id_pessoa_fisica integer NOT NULL,
    dt_nascimento date,
    nu_cpf integer,
    no_sexo character varying(45) NOT NULL
);
 !   DROP TABLE public.pessoa_fisica;
       public         postgres    false    5            �            1259    26187    pessoa_fisica_funcao_atividade    TABLE     �   CREATE TABLE pessoa_fisica_funcao_atividade (
    id_pessoa_fisica integer NOT NULL,
    id_funcao_atividade integer NOT NULL
);
 2   DROP TABLE public.pessoa_fisica_funcao_atividade;
       public         postgres    false    5            �            1259    26201    pessoa_juridica    TABLE     �   CREATE TABLE pessoa_juridica (
    id_pessoa_juridica integer NOT NULL,
    sg_empresa character varying(45),
    nu_cnpj integer,
    no_fantasia text
);
 #   DROP TABLE public.pessoa_juridica;
       public         postgres    false    5            �            1259    26209     pessoa_turma_id_pessoa_turma_seq    SEQUENCE     �   CREATE SEQUENCE pessoa_turma_id_pessoa_turma_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.pessoa_turma_id_pessoa_turma_seq;
       public       postgres    false    5            �            1259    26211    submodulo_id_submodulo_seq    SEQUENCE     |   CREATE SEQUENCE submodulo_id_submodulo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.submodulo_id_submodulo_seq;
       public       postgres    false    5            �            1259    26213 	   submodulo    TABLE     B  CREATE TABLE submodulo (
    id_submodulo integer DEFAULT nextval('submodulo_id_submodulo_seq'::regclass) NOT NULL,
    no_submodulo character varying(45) NOT NULL,
    no_menu character varying(45) NOT NULL,
    dt_cadastro date NOT NULL,
    st_ativo boolean NOT NULL,
    no_img text,
    id_modulo integer NOT NULL
);
    DROP TABLE public.submodulo;
       public         postgres    false    199    5            �            1259    26222    telefone_id_telefone_seq    SEQUENCE     z   CREATE SEQUENCE telefone_id_telefone_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.telefone_id_telefone_seq;
       public       postgres    false    5            �            1259    26224    telefone    TABLE     �   CREATE TABLE telefone (
    id_telefone integer DEFAULT nextval('telefone_id_telefone_seq'::regclass) NOT NULL,
    nu_telefone integer NOT NULL,
    st_ativo boolean NOT NULL,
    id_pessoa integer NOT NULL,
    id_tipo_telefone integer NOT NULL
);
    DROP TABLE public.telefone;
       public         postgres    false    201    5            �            1259    26230 .   tipo_funcionalidade_id_tipo_funcionalidade_seq    SEQUENCE     �   CREATE SEQUENCE tipo_funcionalidade_id_tipo_funcionalidade_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 E   DROP SEQUENCE public.tipo_funcionalidade_id_tipo_funcionalidade_seq;
       public       postgres    false    5            �            1259    26232    tipo_funcionalidade    TABLE     �   CREATE TABLE tipo_funcionalidade (
    id_tipo_funcionalidade integer DEFAULT nextval('tipo_funcionalidade_id_tipo_funcionalidade_seq'::regclass) NOT NULL,
    no_tipo_funcionalidade character varying(45) NOT NULL,
    st_ativo boolean NOT NULL
);
 '   DROP TABLE public.tipo_funcionalidade;
       public         postgres    false    203    5            �            1259    26238    tipo_grupo_id_tipo_grupo_seq    SEQUENCE     ~   CREATE SEQUENCE tipo_grupo_id_tipo_grupo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.tipo_grupo_id_tipo_grupo_seq;
       public       postgres    false    5            �            1259    26240 "   tipo_telefone_id_tipo_telefone_seq    SEQUENCE     �   CREATE SEQUENCE tipo_telefone_id_tipo_telefone_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.tipo_telefone_id_tipo_telefone_seq;
       public       postgres    false    5            �            1259    26242    tipo_telefone    TABLE     �   CREATE TABLE tipo_telefone (
    id_tipo_telefone integer DEFAULT nextval('tipo_telefone_id_tipo_telefone_seq'::regclass) NOT NULL,
    no_tipo_telefone character varying(45) NOT NULL,
    st_ativo boolean NOT NULL
);
 !   DROP TABLE public.tipo_telefone;
       public         postgres    false    206    5            �            1259    26248    turma_id_turma_seq    SEQUENCE     t   CREATE SEQUENCE turma_id_turma_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.turma_id_turma_seq;
       public       postgres    false    5            �            1259    26250    usuario    TABLE     &  CREATE TABLE usuario (
    id_usuario integer NOT NULL,
    dt_cadastro date NOT NULL,
    dt_ult_visita timestamp without time zone,
    st_ativo boolean NOT NULL,
    no_usuario character varying(45) NOT NULL,
    no_senha text NOT NULL,
    id_perfil integer NOT NULL,
    st_cookie text
);
    DROP TABLE public.usuario;
       public         postgres    false    5            �           0    0    autor_id_autor_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('autor_id_autor_seq', 1, false);
            public       postgres    false    168            �           0    0 "   classificacao_id_classificacao_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('classificacao_id_classificacao_seq', 1, false);
            public       postgres    false    169            �          0    26090    desativacao_usuario 
   TABLE DATA               �   COPY desativacao_usuario (id_desativacao, dt_desativacao, no_motivo_desat, st_ativo, no_motivo_ativacao, dt_ativacao, id_usuario) FROM stdin;
    public       postgres    false    171   1�       �           0    0 &   desativacao_usuario_id_desativacao_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('desativacao_usuario_id_desativacao_seq', 1, false);
            public       postgres    false    170                        0    0    editora_id_editora_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('editora_id_editora_seq', 1, false);
            public       postgres    false    172            �          0    26103    email 
   TABLE DATA               >   COPY email (id_email, email, st_ativo, id_pessoa) FROM stdin;
    public       postgres    false    174   N�                  0    0    email_id_email_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('email_id_email_seq', 1, false);
            public       postgres    false    173                       0    0    emprestimo_id_emprestimo_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('emprestimo_id_emprestimo_seq', 1, false);
            public       postgres    false    175                       0    0    espirito_id_espirito_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('espirito_id_espirito_seq', 1, false);
            public       postgres    false    176            �          0    26118    funcao_atividade 
   TABLE DATA               W   COPY funcao_atividade (id_funcao_atividade, no_funcao_atividade, st_ativo) FROM stdin;
    public       postgres    false    178   k�                  0    0 (   funcao_atividade_id_funcao_atividade_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('funcao_atividade_id_funcao_atividade_seq', 10, true);
            public       postgres    false    177            �          0    26129    funcionalidade 
   TABLE DATA               �   COPY funcionalidade (id_funcionalidade, no_funcionalidade, dt_cadastro, st_ativo, no_menu, id_tipo_funcionalidade, id_submodulo) FROM stdin;
    public       postgres    false    180   ��                  0    0 $   funcionalidade_id_funcionalidade_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('funcionalidade_id_funcionalidade_seq', 7, true);
            public       postgres    false    179            �          0    26135    funcionalidade_perfil 
   TABLE DATA               F   COPY funcionalidade_perfil (id_funcionalidade, id_perfil) FROM stdin;
    public       postgres    false    181   7�                  0    0     grupo_estudo_id_grupo_estudo_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('grupo_estudo_id_grupo_estudo_seq', 1, false);
            public       postgres    false    182            �          0    26144 	   historico 
   TABLE DATA               V   COPY historico (id_historico, dt_cadastro, no_acao, st_ativo, id_usuario) FROM stdin;
    public       postgres    false    184   b�                  0    0    historico_id_historico_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('historico_id_historico_seq', 1, false);
            public       postgres    false    183                       0    0    indexacao_id_indexacao_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('indexacao_id_indexacao_seq', 1, false);
            public       postgres    false    185            	           0    0    livro_id_livro_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('livro_id_livro_seq', 1, false);
            public       postgres    false    186            
           0    0    midia_id_midia_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('midia_id_midia_seq', 1, false);
            public       postgres    false    187            �          0    26161    modulo 
   TABLE DATA               e   COPY modulo (id_modulo, no_modulo, dt_cadastro, no_menu, st_ativo, no_img, no_descricao) FROM stdin;
    public       postgres    false    189   �                  0    0    modulo_id_modulo_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('modulo_id_modulo_seq', 1, true);
            public       postgres    false    188                       0    0    origem_id_origem_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('origem_id_origem_seq', 1, false);
            public       postgres    false    190            �          0    26174    perfil 
   TABLE DATA               9   COPY perfil (id_perfil, no_perfil, st_ativo) FROM stdin;
    public       postgres    false    192   Ę                  0    0    perfil_id_perfil_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('perfil_id_perfil_seq', 1, true);
            public       postgres    false    191            �          0    26192    pessoa 
   TABLE DATA               q   COPY pessoa (id_pessoa, no_pessoa, dt_cadastro, st_ativo, no_endereco, no_bairro, nu_cep, no_cidade) FROM stdin;
    public       postgres    false    196   �       �          0    26182    pessoa_fisica 
   TABLE DATA               R   COPY pessoa_fisica (id_pessoa_fisica, dt_nascimento, nu_cpf, no_sexo) FROM stdin;
    public       postgres    false    194   *�       �          0    26187    pessoa_fisica_funcao_atividade 
   TABLE DATA               X   COPY pessoa_fisica_funcao_atividade (id_pessoa_fisica, id_funcao_atividade) FROM stdin;
    public       postgres    false    195   V�                  0    0    pessoa_id_pessoa_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('pessoa_id_pessoa_seq', 1, true);
            public       postgres    false    193            �          0    26201    pessoa_juridica 
   TABLE DATA               X   COPY pessoa_juridica (id_pessoa_juridica, sg_empresa, nu_cnpj, no_fantasia) FROM stdin;
    public       postgres    false    197   s�                  0    0     pessoa_turma_id_pessoa_turma_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('pessoa_turma_id_pessoa_turma_seq', 1, false);
            public       postgres    false    198            �          0    26213 	   submodulo 
   TABLE DATA               k   COPY submodulo (id_submodulo, no_submodulo, no_menu, dt_cadastro, st_ativo, no_img, id_modulo) FROM stdin;
    public       postgres    false    200   ��                  0    0    submodulo_id_submodulo_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('submodulo_id_submodulo_seq', 4, true);
            public       postgres    false    199            �          0    26224    telefone 
   TABLE DATA               \   COPY telefone (id_telefone, nu_telefone, st_ativo, id_pessoa, id_tipo_telefone) FROM stdin;
    public       postgres    false    202   ��                  0    0    telefone_id_telefone_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('telefone_id_telefone_seq', 1, false);
            public       postgres    false    201            �          0    26232    tipo_funcionalidade 
   TABLE DATA               `   COPY tipo_funcionalidade (id_tipo_funcionalidade, no_tipo_funcionalidade, st_ativo) FROM stdin;
    public       postgres    false    204   �                  0    0 .   tipo_funcionalidade_id_tipo_funcionalidade_seq    SEQUENCE SET     U   SELECT pg_catalog.setval('tipo_funcionalidade_id_tipo_funcionalidade_seq', 4, true);
            public       postgres    false    203                       0    0    tipo_grupo_id_tipo_grupo_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('tipo_grupo_id_tipo_grupo_seq', 1, false);
            public       postgres    false    205            �          0    26242    tipo_telefone 
   TABLE DATA               N   COPY tipo_telefone (id_tipo_telefone, no_tipo_telefone, st_ativo) FROM stdin;
    public       postgres    false    207   _�                  0    0 "   tipo_telefone_id_tipo_telefone_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('tipo_telefone_id_tipo_telefone_seq', 1, false);
            public       postgres    false    206                       0    0    turma_id_turma_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('turma_id_turma_seq', 1, false);
            public       postgres    false    208            �          0    26250    usuario 
   TABLE DATA               x   COPY usuario (id_usuario, dt_cadastro, dt_ult_visita, st_ativo, no_usuario, no_senha, id_perfil, st_cookie) FROM stdin;
    public       postgres    false    209   |�       G           2606    26221    controller_id_pk 
   CONSTRAINT     [   ALTER TABLE ONLY submodulo
    ADD CONSTRAINT controller_id_pk PRIMARY KEY (id_submodulo);
 D   ALTER TABLE ONLY public.submodulo DROP CONSTRAINT controller_id_pk;
       public         postgres    false    200    200            /           2606    26098    desativacao_usuario_id_pk 
   CONSTRAINT     p   ALTER TABLE ONLY desativacao_usuario
    ADD CONSTRAINT desativacao_usuario_id_pk PRIMARY KEY (id_desativacao);
 W   ALTER TABLE ONLY public.desativacao_usuario DROP CONSTRAINT desativacao_usuario_id_pk;
       public         postgres    false    171    171            1           2606    26111    email_pk 
   CONSTRAINT     K   ALTER TABLE ONLY email
    ADD CONSTRAINT email_pk PRIMARY KEY (id_email);
 8   ALTER TABLE ONLY public.email DROP CONSTRAINT email_pk;
       public         postgres    false    174    174            3           2606    26126    funcao_atividade_pk 
   CONSTRAINT     l   ALTER TABLE ONLY funcao_atividade
    ADD CONSTRAINT funcao_atividade_pk PRIMARY KEY (id_funcao_atividade);
 N   ALTER TABLE ONLY public.funcao_atividade DROP CONSTRAINT funcao_atividade_pk;
       public         postgres    false    178    178            5           2606    26134    funcionalidade_id_pk 
   CONSTRAINT     i   ALTER TABLE ONLY funcionalidade
    ADD CONSTRAINT funcionalidade_id_pk PRIMARY KEY (id_funcionalidade);
 M   ALTER TABLE ONLY public.funcionalidade DROP CONSTRAINT funcionalidade_id_pk;
       public         postgres    false    180    180            7           2606    26139    funcionalidade_perfil_pk 
   CONSTRAINT        ALTER TABLE ONLY funcionalidade_perfil
    ADD CONSTRAINT funcionalidade_perfil_pk PRIMARY KEY (id_funcionalidade, id_perfil);
 X   ALTER TABLE ONLY public.funcionalidade_perfil DROP CONSTRAINT funcionalidade_perfil_pk;
       public         postgres    false    181    181    181            9           2606    26152    historico_id_pk 
   CONSTRAINT     Z   ALTER TABLE ONLY historico
    ADD CONSTRAINT historico_id_pk PRIMARY KEY (id_historico);
 C   ALTER TABLE ONLY public.historico DROP CONSTRAINT historico_id_pk;
       public         postgres    false    184    184            ;           2606    26169    modulo_id_pk 
   CONSTRAINT     Q   ALTER TABLE ONLY modulo
    ADD CONSTRAINT modulo_id_pk PRIMARY KEY (id_modulo);
 =   ALTER TABLE ONLY public.modulo DROP CONSTRAINT modulo_id_pk;
       public         postgres    false    189    189            =           2606    26179    perfil_id_pk 
   CONSTRAINT     Q   ALTER TABLE ONLY perfil
    ADD CONSTRAINT perfil_id_pk PRIMARY KEY (id_perfil);
 =   ALTER TABLE ONLY public.perfil DROP CONSTRAINT perfil_id_pk;
       public         postgres    false    192    192            A           2606    26191 !   pessoa_fisica_funcao_atividade_pk 
   CONSTRAINT     �   ALTER TABLE ONLY pessoa_fisica_funcao_atividade
    ADD CONSTRAINT pessoa_fisica_funcao_atividade_pk PRIMARY KEY (id_pessoa_fisica, id_funcao_atividade);
 j   ALTER TABLE ONLY public.pessoa_fisica_funcao_atividade DROP CONSTRAINT pessoa_fisica_funcao_atividade_pk;
       public         postgres    false    195    195    195            ?           2606    26186    pessoa_fisica_pk 
   CONSTRAINT     c   ALTER TABLE ONLY pessoa_fisica
    ADD CONSTRAINT pessoa_fisica_pk PRIMARY KEY (id_pessoa_fisica);
 H   ALTER TABLE ONLY public.pessoa_fisica DROP CONSTRAINT pessoa_fisica_pk;
       public         postgres    false    194    194            C           2606    26200    pessoa_id_pessoa_pk 
   CONSTRAINT     X   ALTER TABLE ONLY pessoa
    ADD CONSTRAINT pessoa_id_pessoa_pk PRIMARY KEY (id_pessoa);
 D   ALTER TABLE ONLY public.pessoa DROP CONSTRAINT pessoa_id_pessoa_pk;
       public         postgres    false    196    196            E           2606    26208    pessoa_juridica_pk 
   CONSTRAINT     i   ALTER TABLE ONLY pessoa_juridica
    ADD CONSTRAINT pessoa_juridica_pk PRIMARY KEY (id_pessoa_juridica);
 L   ALTER TABLE ONLY public.pessoa_juridica DROP CONSTRAINT pessoa_juridica_pk;
       public         postgres    false    197    197            I           2606    26229    telefone_pk 
   CONSTRAINT     T   ALTER TABLE ONLY telefone
    ADD CONSTRAINT telefone_pk PRIMARY KEY (id_telefone);
 >   ALTER TABLE ONLY public.telefone DROP CONSTRAINT telefone_pk;
       public         postgres    false    202    202            K           2606    26237    tipo_funcionalidade_id_pk 
   CONSTRAINT     x   ALTER TABLE ONLY tipo_funcionalidade
    ADD CONSTRAINT tipo_funcionalidade_id_pk PRIMARY KEY (id_tipo_funcionalidade);
 W   ALTER TABLE ONLY public.tipo_funcionalidade DROP CONSTRAINT tipo_funcionalidade_id_pk;
       public         postgres    false    204    204            M           2606    26247    tipo_telefone_pk 
   CONSTRAINT     c   ALTER TABLE ONLY tipo_telefone
    ADD CONSTRAINT tipo_telefone_pk PRIMARY KEY (id_tipo_telefone);
 H   ALTER TABLE ONLY public.tipo_telefone DROP CONSTRAINT tipo_telefone_pk;
       public         postgres    false    207    207            O           2606    26257 
   usuario_pk 
   CONSTRAINT     Q   ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pk PRIMARY KEY (id_usuario);
 <   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pk;
       public         postgres    false    209    209            X           2606    26298    funcao_atividade_fk    FK CONSTRAINT     �   ALTER TABLE ONLY pessoa_fisica_funcao_atividade
    ADD CONSTRAINT funcao_atividade_fk FOREIGN KEY (id_funcao_atividade) REFERENCES funcao_atividade(id_funcao_atividade) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 \   ALTER TABLE ONLY public.pessoa_fisica_funcao_atividade DROP CONSTRAINT funcao_atividade_fk;
       public       postgres    false    178    2867    195            T           2606    26278    funcionalidade_fk    FK CONSTRAINT     �   ALTER TABLE ONLY funcionalidade_perfil
    ADD CONSTRAINT funcionalidade_fk FOREIGN KEY (id_funcionalidade) REFERENCES funcionalidade(id_funcionalidade) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 Q   ALTER TABLE ONLY public.funcionalidade_perfil DROP CONSTRAINT funcionalidade_fk;
       public       postgres    false    2869    180    181            [           2606    26313 	   modulo_fk    FK CONSTRAINT     �   ALTER TABLE ONLY submodulo
    ADD CONSTRAINT modulo_fk FOREIGN KEY (id_modulo) REFERENCES modulo(id_modulo) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 =   ALTER TABLE ONLY public.submodulo DROP CONSTRAINT modulo_fk;
       public       postgres    false    189    200    2875            U           2606    26283 	   perfil_fk    FK CONSTRAINT     �   ALTER TABLE ONLY funcionalidade_perfil
    ADD CONSTRAINT perfil_fk FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 I   ALTER TABLE ONLY public.funcionalidade_perfil DROP CONSTRAINT perfil_fk;
       public       postgres    false    181    2877    192            ^           2606    26328 	   perfil_fk    FK CONSTRAINT     �   ALTER TABLE ONLY usuario
    ADD CONSTRAINT perfil_fk FOREIGN KEY (id_perfil) REFERENCES perfil(id_perfil) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 ;   ALTER TABLE ONLY public.usuario DROP CONSTRAINT perfil_fk;
       public       postgres    false    192    2877    209            Y           2606    26303    pessoa_fisica_fk    FK CONSTRAINT     �   ALTER TABLE ONLY pessoa_fisica_funcao_atividade
    ADD CONSTRAINT pessoa_fisica_fk FOREIGN KEY (id_pessoa_fisica) REFERENCES pessoa_fisica(id_pessoa_fisica) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 Y   ALTER TABLE ONLY public.pessoa_fisica_funcao_atividade DROP CONSTRAINT pessoa_fisica_fk;
       public       postgres    false    195    2879    194            _           2606    26333    pessoa_fisica_fk    FK CONSTRAINT     �   ALTER TABLE ONLY usuario
    ADD CONSTRAINT pessoa_fisica_fk FOREIGN KEY (id_usuario) REFERENCES pessoa_fisica(id_pessoa_fisica) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;
 B   ALTER TABLE ONLY public.usuario DROP CONSTRAINT pessoa_fisica_fk;
       public       postgres    false    2879    209    194            Q           2606    26263 	   pessoa_fk    FK CONSTRAINT     �   ALTER TABLE ONLY email
    ADD CONSTRAINT pessoa_fk FOREIGN KEY (id_pessoa) REFERENCES pessoa(id_pessoa) MATCH FULL ON UPDATE CASCADE ON DELETE SET NULL;
 9   ALTER TABLE ONLY public.email DROP CONSTRAINT pessoa_fk;
       public       postgres    false    2883    174    196            W           2606    26293 	   pessoa_fk    FK CONSTRAINT     �   ALTER TABLE ONLY pessoa_fisica
    ADD CONSTRAINT pessoa_fk FOREIGN KEY (id_pessoa_fisica) REFERENCES pessoa(id_pessoa) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;
 A   ALTER TABLE ONLY public.pessoa_fisica DROP CONSTRAINT pessoa_fk;
       public       postgres    false    2883    196    194            Z           2606    26308 	   pessoa_fk    FK CONSTRAINT     �   ALTER TABLE ONLY pessoa_juridica
    ADD CONSTRAINT pessoa_fk FOREIGN KEY (id_pessoa_juridica) REFERENCES pessoa(id_pessoa) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;
 C   ALTER TABLE ONLY public.pessoa_juridica DROP CONSTRAINT pessoa_fk;
       public       postgres    false    2883    197    196            \           2606    26318 	   pessoa_fk    FK CONSTRAINT     �   ALTER TABLE ONLY telefone
    ADD CONSTRAINT pessoa_fk FOREIGN KEY (id_pessoa) REFERENCES pessoa(id_pessoa) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 <   ALTER TABLE ONLY public.telefone DROP CONSTRAINT pessoa_fk;
       public       postgres    false    196    202    2883            R           2606    26268    submodulo_fk    FK CONSTRAINT     �   ALTER TABLE ONLY funcionalidade
    ADD CONSTRAINT submodulo_fk FOREIGN KEY (id_submodulo) REFERENCES submodulo(id_submodulo) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 E   ALTER TABLE ONLY public.funcionalidade DROP CONSTRAINT submodulo_fk;
       public       postgres    false    180    200    2887            S           2606    26273    tipo_funcionalidade_fk    FK CONSTRAINT     �   ALTER TABLE ONLY funcionalidade
    ADD CONSTRAINT tipo_funcionalidade_fk FOREIGN KEY (id_tipo_funcionalidade) REFERENCES tipo_funcionalidade(id_tipo_funcionalidade) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 O   ALTER TABLE ONLY public.funcionalidade DROP CONSTRAINT tipo_funcionalidade_fk;
       public       postgres    false    180    204    2891            ]           2606    26323    tipo_telefone_fk    FK CONSTRAINT     �   ALTER TABLE ONLY telefone
    ADD CONSTRAINT tipo_telefone_fk FOREIGN KEY (id_tipo_telefone) REFERENCES tipo_telefone(id_tipo_telefone) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 C   ALTER TABLE ONLY public.telefone DROP CONSTRAINT tipo_telefone_fk;
       public       postgres    false    202    207    2893            P           2606    26258 
   usuario_fk    FK CONSTRAINT     �   ALTER TABLE ONLY desativacao_usuario
    ADD CONSTRAINT usuario_fk FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 H   ALTER TABLE ONLY public.desativacao_usuario DROP CONSTRAINT usuario_fk;
       public       postgres    false    171    209    2895            V           2606    26288 
   usuario_fk    FK CONSTRAINT     �   ALTER TABLE ONLY historico
    ADD CONSTRAINT usuario_fk FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario) MATCH FULL ON UPDATE CASCADE ON DELETE RESTRICT;
 >   ALTER TABLE ONLY public.historico DROP CONSTRAINT usuario_fk;
       public       postgres    false    184    209    2895            �      x������ � �      �      x������ � �      �   /   x���L,NIL�,��,I-.IU(����@C�Ĭ�
 +F��� �      �   }   x�3���,.I,Rp+�;����|ǒ̲̔ĔTN#C]K]��2NCNC.#NהL��� Ə�(i�霘�X\R�.�6*3�t�H�)��4�(ksUhq��E�����n1����� d�4x      �      x�3�4�2bc 6bs ����� '��      �      x������ � �      �   5   x�3�LL����4204�5��54�t	d�%^~xq>g	g�q��qqq [�%      �      x�3�tL����,.)JL�/�,����� Z?�      �   '   x�3�tOMNN��4204�50�52�,��#�=... ��l      �      x�3��!����Ҝ̼|�=... Jz�      �      x������ � �      �      x������ � �      �   _   x�3�L+�KN��M,�,�LILI�t+�;����|G�����������	g	gZ�BZ�niqj�nn
�!�	giqibQf>ghq�� \�)�1z\\\ ��%?      �      x������ � �      �   3   x�3���,.I,�,�2�LMɄ0�9�S�K��<�Ԋ��L;F��� ��l      �      x������ � �      �   g   x�3�4204�50�52���,�LOMNN��T1�T14T	2�2Lv�H��+/73�L���ԫJ�3�L˫�O7�p�w���0)�vM
)���4����� �$]     