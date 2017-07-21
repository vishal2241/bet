/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     20/07/2017 2:32:12 p. m.                     */
/*==============================================================*/


drop table if exists APUESTA;

drop table if exists COMPETENCIA;

drop table if exists CUOTA;

drop table if exists CUOTA_APUESTA;

drop table if exists EQUIPO;

drop table if exists PAIS;

drop table if exists PARTIDO;

drop table if exists PARTIDO_EQUIPO;

drop table if exists TIPO;

drop table if exists USUARIO;

/*==============================================================*/
/* Table: APUESTA                                               */
/*==============================================================*/
create table APUESTA
(
   ID_APUESTA           int not null,
   CEDULA               varchar(20) not null,
   FECHA                date,
   HORA                 time,
   PREMIO               decimal,
   ESTADO               char(10),
   TOTAL_CREDITOS       decimal,
   primary key (ID_APUESTA)
);

/*==============================================================*/
/* Table: COMPETENCIA                                           */
/*==============================================================*/
create table COMPETENCIA
(
   ID_COMPETENCIA       int not null,
   NOMBRE               varchar(30),
   primary key (ID_COMPETENCIA)
);

/*==============================================================*/
/* Table: CUOTA                                                 */
/*==============================================================*/
create table CUOTA
(
   ID_CUOTA             int not null,
   ID_TIPO              int not null,
   ID_PARTIDO           int not null,
   VALOR                decimal,
   primary key (ID_CUOTA)
);

/*==============================================================*/
/* Table: CUOTA_APUESTA                                         */
/*==============================================================*/
create table CUOTA_APUESTA
(
   ID_CUOTA             int not null,
   ID_APUESTA           int not null,
   primary key (ID_CUOTA, ID_APUESTA)
);

/*==============================================================*/
/* Table: EQUIPO                                                */
/*==============================================================*/
create table EQUIPO
(
   ID_EQUIPO            int not null,
   ID_PAIS              int not null,
   NOMBRE               varchar(30),
   primary key (ID_EQUIPO)
);

/*==============================================================*/
/* Table: PAIS                                                  */
/*==============================================================*/
create table PAIS
(
   ID_PAIS              int not null,
   NOMBRE               varchar(30),
   primary key (ID_PAIS)
);

/*==============================================================*/
/* Table: PARTIDO                                               */
/*==============================================================*/
create table PARTIDO
(
   ID_PARTIDO           int not null,
   ID_COMPETENCIA       int not null,
   FECHA                date,
   HORARIO              time,
   primary key (ID_PARTIDO)
);

/*==============================================================*/
/* Table: PARTIDO_EQUIPO                                        */
/*==============================================================*/
create table PARTIDO_EQUIPO
(
   ID_PARTIDO           int not null,
   ID_EQUIPO            int not null,
   primary key (ID_PARTIDO, ID_EQUIPO)
);

/*==============================================================*/
/* Table: TIPO                                                  */
/*==============================================================*/
create table TIPO
(
   ID_TIPO              int not null,
   NOMBRE               varchar(30),
   primary key (ID_TIPO)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   CEDULA               varchar(20) not null,
   P_NOMBRE             varchar(20),
   S_NOMBRE             varchar(20),
   P_APELIIDO           varchar(20),
   S_APELLIDO           varchar(20),
   EMAIL                varchar(30),
   CLAVE                varchar(50),
   FECHA_NAC            date,
   DIRECCION            varchar(30),
   TELEFONO             varchar(20),
   SALDO                decimal,
   primary key (CEDULA)
);

alter table APUESTA add constraint FK_REALIZA foreign key (CEDULA)
      references USUARIO (CEDULA) on delete restrict on update restrict;

alter table CUOTA add constraint FK_EQUIVALE foreign key (ID_PARTIDO)
      references PARTIDO (ID_PARTIDO) on delete restrict on update restrict;

alter table CUOTA add constraint FK_SE_CLASIFICA foreign key (ID_TIPO)
      references TIPO (ID_TIPO) on delete restrict on update restrict;

alter table CUOTA_APUESTA add constraint FK_CONTIENE foreign key (ID_CUOTA)
      references CUOTA (ID_CUOTA) on delete restrict on update restrict;

alter table CUOTA_APUESTA add constraint FK_CONTIENE2 foreign key (ID_APUESTA)
      references APUESTA (ID_APUESTA) on delete restrict on update restrict;

alter table EQUIPO add constraint FK_PERTENECE foreign key (ID_PAIS)
      references PAIS (ID_PAIS) on delete restrict on update restrict;

alter table PARTIDO add constraint FK_TIENE foreign key (ID_COMPETENCIA)
      references COMPETENCIA (ID_COMPETENCIA) on delete restrict on update restrict;

alter table PARTIDO_EQUIPO add constraint FK_JUEGA foreign key (ID_PARTIDO)
      references PARTIDO (ID_PARTIDO) on delete restrict on update restrict;

alter table PARTIDO_EQUIPO add constraint FK_JUEGA2 foreign key (ID_EQUIPO)
      references EQUIPO (ID_EQUIPO) on delete restrict on update restrict;

