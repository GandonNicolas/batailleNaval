--
-- PostgreSQL database dump
--

-- Dumped from database version 10.18 (Ubuntu 10.18-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.18 (Ubuntu 10.18-0ubuntu0.18.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

ALTER TABLE ONLY public.game DROP CONSTRAINT game_player2_id_fkey;
ALTER TABLE ONLY public.game DROP CONSTRAINT game_player1_id_fkey;
ALTER TABLE ONLY public.playertest DROP CONSTRAINT playertest_pkey;
ALTER TABLE ONLY public.playertest2 DROP CONSTRAINT playertest2_pkey;
ALTER TABLE ONLY public.player DROP CONSTRAINT player_pkey;
ALTER TABLE ONLY public.game DROP CONSTRAINT game_pkey;
ALTER TABLE public.playertest2 ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.playertest ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.player ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.game ALTER COLUMN id DROP DEFAULT;
DROP SEQUENCE public.playertest_id_seq;
DROP SEQUENCE public.playertest2_id_seq;
DROP TABLE public.playertest2;
DROP TABLE public.playertest;
DROP SEQUENCE public.player_id_seq;
DROP TABLE public.player;
DROP SEQUENCE public.game_id_seq;
DROP TABLE public.game;
DROP EXTENSION plpgsql;
DROP SCHEMA public;
--
-- Name: public; Type: SCHEMA; Schema: -; Owner: -
--

CREATE SCHEMA public;


--
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: -
--

COMMENT ON SCHEMA public IS 'standard public schema';


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: -
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: -
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: game; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.game (
    id integer NOT NULL,
    player1_id integer NOT NULL,
    player2_id integer NOT NULL
);


--
-- Name: game_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.game_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: game_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.game_id_seq OWNED BY public.game.id;


--
-- Name: player; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.player (
    id integer NOT NULL,
    pseudo text NOT NULL,
    coordinate text,
    shoot text
);


--
-- Name: player_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.player_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: player_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.player_id_seq OWNED BY public.player.id;


--
-- Name: playertest; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.playertest (
    id integer NOT NULL,
    pseudo text NOT NULL,
    coordinate text[] DEFAULT ARRAY[]::text[]
);


--
-- Name: playertest2; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.playertest2 (
    id integer NOT NULL,
    pseudo text NOT NULL,
    coordinate text
);


--
-- Name: playertest2_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.playertest2_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: playertest2_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.playertest2_id_seq OWNED BY public.playertest2.id;


--
-- Name: playertest_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.playertest_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: playertest_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.playertest_id_seq OWNED BY public.playertest.id;


--
-- Name: game id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.game ALTER COLUMN id SET DEFAULT nextval('public.game_id_seq'::regclass);


--
-- Name: player id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.player ALTER COLUMN id SET DEFAULT nextval('public.player_id_seq'::regclass);


--
-- Name: playertest id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.playertest ALTER COLUMN id SET DEFAULT nextval('public.playertest_id_seq'::regclass);


--
-- Name: playertest2 id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.playertest2 ALTER COLUMN id SET DEFAULT nextval('public.playertest2_id_seq'::regclass);


--
-- Data for Name: game; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.game (id, player1_id, player2_id) FROM stdin;
73	286	287
\.


--
-- Data for Name: player; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.player (id, pseudo, coordinate, shoot) FROM stdin;
287	mathou	a:17:{i:0;s:2:"F3";i:1;s:2:"G3";i:2;s:2:"H3";i:3;s:2:"I3";i:4;s:2:"J3";i:5;s:2:"B1";i:6;s:2:"B2";i:7;s:2:"B3";i:8;s:2:"B4";i:9;s:2:"D8";i:10;s:2:"E8";i:11;s:2:"F8";i:12;s:2:"A7";i:13;s:2:"A8";i:14;s:2:"A9";i:15;s:2:"F8";i:16;s:2:"G8";}	s:59:"A1,B1,C1,D1,E1,F1,G1,,G9,B2,A1,A1,A1,A1,A1,A1,A1,A1,A1,,A2,";
286	nicolas	a:17:{i:0;s:2:"A1";i:1;s:2:"A2";i:2;s:2:"A3";i:3;s:2:"A4";i:4;s:2:"A5";i:5;s:2:"A1";i:6;s:2:"B1";i:7;s:2:"C1";i:8;s:2:"D1";i:9;s:2:"I5";i:10;s:2:"I6";i:11;s:2:"I7";i:12;s:2:"E1";i:13;s:2:"F1";i:14;s:2:"G1";i:15;s:2:"D5";i:16;s:2:"D6";}	s:20:"F3,A1,A2,G3,H3,,,A3,";
\.


--
-- Data for Name: playertest; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.playertest (id, pseudo, coordinate) FROM stdin;
1	nicoals	{A1,A2,A3,A4,A5,A1,B1,C1,D1,I5,I6,I7,E1,F1,G1,D5,D6}
\.


--
-- Data for Name: playertest2; Type: TABLE DATA; Schema: public; Owner: -
--

COPY public.playertest2 (id, pseudo, coordinate) FROM stdin;
1	nico	a:17:{i:0;s:2:"A1";i:1;s:2:"A2";i:2;s:2:"A3";i:3;s:2:"A4";i:4;s:2:"A5";i:5;s:2:"A1";i:6;s:2:"B1";i:7;s:2:"C1";i:8;s:2:"D1";i:9;s:2:"I5";i:10;s:2:"I6";i:11;s:2:"I7";i:12;s:2:"E1";i:13;s:2:"F1";i:14;s:2:"G1";i:15;s:2:"D5";i:16;s:2:"D6";}
\.


--
-- Name: game_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.game_id_seq', 73, true);


--
-- Name: player_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.player_id_seq', 287, true);


--
-- Name: playertest2_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.playertest2_id_seq', 1, true);


--
-- Name: playertest_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.playertest_id_seq', 2, true);


--
-- Name: game game_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.game
    ADD CONSTRAINT game_pkey PRIMARY KEY (id);


--
-- Name: player player_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.player
    ADD CONSTRAINT player_pkey PRIMARY KEY (id);


--
-- Name: playertest2 playertest2_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.playertest2
    ADD CONSTRAINT playertest2_pkey PRIMARY KEY (id);


--
-- Name: playertest playertest_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.playertest
    ADD CONSTRAINT playertest_pkey PRIMARY KEY (id);


--
-- Name: game game_player1_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.game
    ADD CONSTRAINT game_player1_id_fkey FOREIGN KEY (player1_id) REFERENCES public.player(id);


--
-- Name: game game_player2_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.game
    ADD CONSTRAINT game_player2_id_fkey FOREIGN KEY (player2_id) REFERENCES public.player(id);


--
-- PostgreSQL database dump complete
--

