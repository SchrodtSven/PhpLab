<?php

/**
 * Containing mock data for writing (anonymous test data)
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PhpLab
 * @package PhpLab
 * @version 0.1
 * @since 2025-08-13
 */

namespace SchrodtSven\PhpLab\Data;

class Mocky
{
    public const array FEM_FIRST = ['Adela', 'Adelice', 'Adora', 'Adore', 'Afton', 'Ag', 'Agnes', 'Aidan', 'Aigneis', 'Aileen', 
                'Aili', 'Ailina', 'Aindrea', 'Alaine', 'Alanna', 'Alanna', 'Alecia', 'Alexandrina', 'Alexis', 'Alida', 'Alina', 'Allissa', 
                'Alyce', 'Ame', 'Amelia', 'Amelie', 'Amity', 'Amye', 'Analise', 'Analise', 'Andra', 'Andree', 'Andriana', 'Andriette', 'Andy', 
                'Anestassia', 'Angelica', 'Ania', 'Anna-diana', 'Annalise', 'Arabela', 'Arabella', 'Ashia', 'Ashlee', 'Ashley', 'Aubine', 'Aubrey', 
                'Audrye', 'Audy', 'Auroora', 'Barbe', 'Barrie', 'Bea', 'Belita', 'Bellanca', 'Benedicta', 'Benny', 'Bethena', 'Betta', 'Bibbye',
                'Biddy', 'Billie', 'Bobbye', 'Brandi', 'Brenda', 'Brier', 'Britney', 'Britteny', 'Brunhilde', 'Bryana', 'Bryana', 'Cahra', 'Cammi', 
                'Caril', 'Carilyn', 'Carine', 'Carlyn', 'Carolin', 'Carolina', 'Catlee', 'Caty', 'Cecil', 'Cecily', 'Celine', 'Chanda', 'Charis', 
                'Charmain', 'Cherilyn', 'Chicky', 'Chloette', 'Chris', 'Christalle', 'Chrystal', 'Chrystal', 'Clementia', 'Clemmie', 'Cleopatra', 
                'Conni', 'Corabel', 'Corabelle', 'Coraline', 'Corella', 'Corette', 'Corey', 'Corinna', 'Costanza', 'Cristi', 'Dacia', 'Daniele', 
                'Danika', 'Danila', 'Danit', 'Daphene', 'Dari', 'Darlene', 'Dasha', 'Daune', 'Debbi', 'Debbie', 'Debora', 'Deeanne', 'Del', 
                'Desdemona', 'Devi', 'Diandra', 'Dionne', 'Dix', 'Donnajean', 'Dorothy', 'Dotty', 'Drusy', 'Dulciana', 'Dyann', 'Easter', 'Eddie', 
                'Elfreda', 'Elinore', 'Elisabeth', 'Elita', 'Eloisa', 'Eloisa', 'Elvina', 'Emalia', 'Emelina', 'Emlynn', 'Emlynn', 'Emma', 'Emmaline', 
                'Ericka', 'Erminia', 'Eula', 'Eveleen', 'Fancie', 'Fania', 'Faustina', 'Fawne', 'Fenelia', 'Fernande', 'Fey', 'Filide', 'Fionnula', 
                'Florence', 'Florentia', 'Florida', 'Florrie', 'Fran', 'Frank', 'Frankie', 'Fred', 'Gabriela', 'Gabriella', 'Gae', 'Gay', 'Gay', 'Gayel', 
                'Gayle', 'Gene', 'Genvieve', 'Georgeta', 'Gerta', 'Gertrude', 'Giacinta', 'Gigi', 'Gigi', 'Gilbertina', 'Gillie', 'Gina', 'Ginger', 'Giovanna', 
                'Gladi', 'Glenn', 'Grace', 'Greer', 'Gusti', 'Gwendolin', 'Harriet', 'Harriett', 'Hattie', 'Helen-elizabeth', 'Herminia', 'Herta', 'Hilda', 
                'Hilda', 'Hildy', 'Horatia', 'Ilsa', 'Ilyse', 'Inez', 'Isidora', 'Isidora', 'Jackquelin', 'Jacynth', 'Jade', 'Jandy', 'Janela', 'Janetta', 'Janifer', 
                'Janine', 'Jaquenette', 'Jaquith', 'Jazmin', 'Jazmin', 'Jemmy', 'Jennie', 'Jerrine', 'Jess', 'Joanie', 'Jobina', 'Jodee', 'Joelie', 'Jordanna', 'Joscelin', 
                'Joscelin', 'Josi', 'Josi', 'Joyous', 'Kaitlin', 'Kaitlin', 'Karisa', 'Karlotta', 'Karolina', 'Karon', 'Katrinka', 'Kaycee', 'Kaylyn', 'Kelcie', 'Kellie', 'Kesley', 
                'Kettie', 'Kimberlyn', 'Kitti', 'Klarika', 'Koren', 'La verne', 'Laina', 'Laura', 'Laurette', 'Laurianne', 'Lavena', 'Layla', 'Layne', 'Leoine', 'Lesley', 
                'Lesley', 'Lesli', 'Letta', 'Letti', 'Lezlie', 'Lib', 'Lilah', 'Lilllie', 'Lindsay', 'Lisabeth', 'Lissie', 'Lonee', 'Lonee', 'Lonni', 'Lorenza', 'Lorianna', 
                'Lorrayne', 'Lotta', 'Lucie', 'Lucienne', 'Lurette', 'Lydie', 'Lyn', 'Lynda', 'Lyndel', 'Lyndell', 'Madeleine', 'Madge', 'Mair', 'Malina', 'Mallory', 'Marcellina', 
                'Margalit', 'Margareta', 'Mariejeanne', 'Marietta', 'Marilee', 'Marissa', 'Mariya', 'Marja', 'Marlo', 'Martynne', 'Maryanna', 'Mathilda', 'Matilda', 'Maude', 'Maure', 
                'Maureen', 'Mavra', 'May', 'Megan', 'Melicent', 'Melloney', 'Merna', 'Michaella', 'Michelle', 'Micky', 'Mikaela', 'Mildred', 'Milka', 'Milli', 'Modestine', 'Moreen', 
                'Morgan', 'Morganne', 'Moyra', 'Myrlene', 'Nadean', 'Nadine', 'Nadiya', 'Nancee', 'Natalee', 'Nataline', 'Nikkie', 'Ninetta', 'Nissa', 'Nola', 'Nola', 'Nollie', 'Nomi', 
                'Norina', 'Norine', 'Ofelia', 'Ofilia', 'Olivia', 'Ora', 'Oralee', 'Oralia', 'Othilie', 'Ottilie', 'Patrizia', 'Paulette', 'Paulie', 'Pavia', 'Pier', 'Pier', 'Quintilla', 
                'Rafaelita', 'Rania', 'Ray', 'Raynell', 'Rayshell', 'Rea', 'Rebe', 'Rebeka', 'Rebeka', 'Rebeka', 'Reeva', 'Remy', 'Riane', 'Riane', 'Robin', 'Robyn', 'Rona', 'Ronny', 
                'Roobbie', 'Roselia', 'Rosette', 'Row', 'Rowena', 'Roxie', 'Roxy', 'Rozalie', 'Salome', 'Salomi', 'Saree', 'Scarlett', 'Selina', 'Shannen', 'Sharla', 'Sharron', 'Shawna', 
                'Shir', 'Sibella', 'Silva', 'Sioux', 'Sissy', 'Sophronia', 'Stacee', 'Starla', 'Stormy', 'Sula', 'Sunny', 'Suzanne', 'Suzi', 'Sybyl', 'Sybyl', 'Sybyl', 'Tallou', 'Tandie', 
                'Tania', 'Taryn', 'Tatum', 'Tessie', 'Thomasin', 'Tiffie', 'Timmi', 'Torie', 'Tyne', 'Vanni', 'Vera', 'Vera', 'Veradis', 'Veronika', 'Vinny', 'Violetta', 'Wenda', 'Wileen', 
                'Wilhelmina', 'Wilow', 'Wilow', 'Windy', 'Windy', 'Yevette', 'Yolane', 'Yolanthe', 'Zea', 'Zena', 'Zorah'];
}
