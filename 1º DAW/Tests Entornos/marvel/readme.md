1. Creamos el directorio marvel e iniciamos un repositorio en él.
~~~
cd git
mkdir marvel
cd marvel
git init
~~~
2. Renombramos la rama master/main a marvel
~~~
git branch -m marvel
~~~
3. Creamos un fichero llamado filmografia.txt
~~~
touch filmografiat.txt
~~~
4. Lo añadimos al repositorio como “Índice de películas”
~~~
git add .
git commit -m “Índice de películas”
~~~
5. Creamos una rama llamada capitan_america
~~~
git checkout -b capitan_america

a. Editamos el fichero y escribimos: “1. Captain America: The First
Avenger (1942)"
nano filmografia.txt

b. Confirmamos los cambios “Película 1” y mezclamos con marvel
git add.
git commit -m “Película 1”
git checkout marvel
git merge capitan_america
~~~

6. Creamos una rama llamada capitana_marvel
git checkout -b capitana_marvel

~~~
a. Editamos el fichero y escribimos: “2. Captain Marvel (1995)"
nano filmografia.txt
b. Confirmamos los cambios “Película 2” y mezclamos con marvel
git add .
git commit -m “Película 2”
git checkout marvel
git merge capitana_marvel
~~~

7. Creamos una rama llamada ironman
~~~
a. Editamos el fichero y escribimos: “3. Iron Man (2008)"
b. Confirmamos los cambios “Película 3”
c. Editamos el fichero y escribimos: “4. Iron Man 2 (2011)"
d. Confirmamos los cambios “Película 4” y mezclamos con marvel

git checkout -b ironman
nano filmografia.txt
git add .
git commit -m “Película 3”
nano filmografia.txt
git add .
git commit -m “Película 4”
git checkout marvel
git merge ironman
~~~
8. Creamos una rama llamada hulk
~~~
a. Editamos el fichero y escribimos: “5. The Incredible Hulk (2011)"
b. Confirmamos los cambios “Película 5” y mezclamos con marvel
git checkout -b hulk
nano filmografia.txt
git add . 
git commit -m “Película 5”
git checkout marvel
git merge hulk
~~~
9. Creamos una rama llamada thor
~~~
a. Editamos el fichero y escribimos: "6. Thor (2011)"
b. Confirmamos los cambios “Película 6” y mezclamos con marvel
git checkout -b thor
nano filmografia.txt
git add .
git commit -m “Película 6”
git checkout marvel
git merge thor
~~~
10. Creamos una rama llamada vengadores
~~~
a. Editamos el fichero y escribimos: “7. The Avengers (2012)"
b. Confirmamos los cambios “Película 7” y mezclamos con marvel
git checkout -b vengadores
nano filmografia.txt
git add .
git commit -m “Película 7”
git checkout marvel
git merge vengadores
~~~
11. Cambiamos a la rama ironman
~~~
a. Comprobamos el registro de commits y el estado del fichero ¿qué
ocurre? 
git log - no está actualizado

i. la rama ironman está varios commits por detrás de marvel,
actualiza la rama ironman con los últimos cambios de marvel
ii. Pista: rebase

git checkout ironman
git rebase marvel
b. Editamos el fichero y escribimos: “8. Iron Man 3 (2012)"
c. Confirmamos los cambios “Película 8” y mezclamos con marvel
nano filmografia.txt
git add .
git commit -m “Película 8”
git checkout marvel
git merge ironman
~~~
12. Cambiamos la rama thor ( 👀a partir de aquí)
~~~
a. Editamos el fichero y escribimos: “9. Thor: The Dark World (2013)"
b. Confirmamos los cambios “Película 9” y mezclamos con marvel
git checkout thor
git rebase marvel
nano filmografia.txt
git add .
git commit - “Película 9”
git checkout marvel
git merge thor
~~~
13. Cambiamos la rama capitan_america
~~~
a. Editamos el fichero y escribimos: “10. Captain America: The Winter
Soldier (2014)"
b. Confirmamos los cambios “Película 10” y mezclamos con marvel
git checkout capitan_america
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 10”
git checkout marvel
git merge capitan_america
~~~
14. Creamos una rama llamada guardianes_galaxia
~~~
a. Editamos el fichero y escribimos: “11. Guardians of the Galaxy (2014)"
b. Confirmamos los cambios “Película 11”
c. Editamos el fichero y escribimos: “12. Guardians of the Galaxy 2
(2014)"
d. Confirmamos los cambios “Película 12” y mezclamos con marvel
git checkout -b guardianes_galaxia
nano filmografia.txt
git add .
git commit -m “Película 11”
nano filmografia.txt
git add .
git commit -m “Película 12”
git checkout marvel
git merge guardianes_galaxia
~~~

15. Cambiamos la rama vengadores
~~~
a. Editamos el fichero y escribimos: “13. Avengers: Age of Ultron (2015)"
b. Confirmamos los cambios “Película 13” y mezclamos con marvel
git checkout vengadores
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 13”
git checkout marvel
git merge vengadores
~~~

16. Creamos una rama llamada antman
~~~
a. Editamos el fichero y escribimos: “14. Ant-Man (2015)"
b. Confirmamos los cambios “Película 14” y mezclamos con marvel
git checkout -b antman
nano filmografia.txt
git add .
git commit -m “Película 14”
git checkout marvel
git merge antman
~~~

17. Cambiamos la rama capitan_america
~~~
a. Editamos el fichero y escribimos: “15. Captain America: Civil War
(2016)"
b. Confirmamos los cambios “Película 15” y mezclamos con marvel
git checkout capitan_america
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 15”
git checkout marvel
git merge capitan_america
~~~
18. Creamos una rama llamada black_widow
~~~
a. Editamos el fichero y escribimos: “16. Black Widow (2016)"
b. Confirmamos los cambios “Película 16” y mezclamos con marvel
git checkout -b black_widow
nano filmografia.txt
git add .
git commit -m “Película 16”
git checkout marvel
git merge black_widow
~~~

19. Creamos una rama llamada spiderman
~~~
a. Editamos el fichero y escribimos: “17. Spider-Man: Homecoming
(2016)"
b. Confirmamos los cambios “Película 17” y mezclamos con marvel
git checkout -b spiderman
nano filmografia.txt
git add .
git commit -m “Película 17”
git checkout marvel
git merge spiderman
~~~

20. Creamos una rama llamada strange
~~~
a. Editamos el fichero y escribimos: “18. Doctor Strange (2016-2017)"
b. Confirmamos los cambios “Película 18” y mezclamos con marvel
git checkout -b strange
nano filmografia.txt
git add .
git commit -m “Película 18”
git checkout marvel
git merge strange
~~~

21. Creamos una rama llamada black_panther
~~~
a. Editamos el fichero y escribimos: “19. Black Panther (2017)"
b. Confirmamos los cambios “Película 19” y mezclamos con marvel
git checkout -b black_panther
nano filmografia.txt
git add .
git commit -m “Película 19”
git checkout marvel
git merge black_panther
~~~

22. Cambiamos a la rama thor
~~~
a. Editamos el fichero y escribimos: “20. Thor: Ragnarok (2017)"
b. Confirmamos los cambios “Película 20” y mezclamos con marvel
git checkout thor
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 20”
git checkout marvel
git merge thor
~~~

23. Cambiamos a la rama vengadores
~~~
a. Editamos el fichero y escribimos: “21. Avengers: Infinity War (2017)"
b. Confirmamos los cambios “Película 21” y mezclamos con marvel
git checkout vengadores
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 21”
git checkout marvel
git merge vengadores
~~~

24. Cambiamos a la rama antman
~~~
a. Editamos el fichero y escribimos: “22. Ant-Man and the Wasp (2017)"
b. Confirmamos los cambios “Película 22” y mezclamos con marvel
git checkout antman
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 22”
git checkout marvel git merge antman
~~~

25. Cambiamos a la rama vengadores
~~~
a. Editamos el fichero y escribimos: “23. Avengers: Endgame
(2017-2022)"
b. Confirmamos los cambios “Película 23” y mezclamos con marvel
git checkout vengadores
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 23”
git checkout marvel
git merge vengadores
~~~

26. Creamos una rama llamada shangchi
~~~
a. Editamos el fichero y escribimos: “24. Shang-Chi and the Legend of
the Ten Rings (2023)"
b. Confirmamos los cambios “Película 24” y mezclamos con marvel
git checkout -b shangchi
nano filmografia.txt
git add .
git commit -m “Película 24”
git checkout marvel
git merge shangchi
~~~

27. Cambiamos a la rama spiderman
~~~
a. Editamos el fichero y escribimos: “25. Spider-Man: Far From Home
(2023)"
b. Confirmamos los cambios “Película 25” y mezclamos con marvel
git checkout spìderman
nano filmografia.txt
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 25”
git checkout marvel
git merge spiderman
~~~

28. Creamos una rama llamada eternals
~~~
a. Editamos el fichero y escribimos: “26. Eternals (2023)"
b. Confirmamos los cambios “Película 26” y mezclamos con marvel
git checkout -b eternals
nano filmografia.txt
git add .
git commit -m “Película 26”
git checkout marvel
git merge eternals
~~~

29. Cambiamos a la rama spiderman
~~~
a. Editamos el fichero y escribimos: “27. Spider-Man: No Way Home
(2024)"
b. Confirmamos los cambios “Película 27” y mezclamos con marvel
git checkout spiderman
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 27”
git checkout marvel
git merge spiderman
~~~

30. Cambiamos a la rama strange
~~~
a. Editamos el fichero y escribimos: “28. Dr. Strange in the Multiverse of
Madness (2025)"
b. Confirmamos los cambios “Película 28” y mezclamos con marvel
git checkout strange
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 28”
git checkout marvel
git merge strange
~~~

31. Cambiamos a la rama thor
~~~
a. Editamos el fichero y escribimos: “29. Thor: Love and Thunder (2025)"
b. Confirmamos los cambios “Película 29” y mezclamos con marvel
git checkout thor
git rebase marvel
nano filmografia.txt
git add .
got commit -m “Película 29”
git checkout marvel
git merge thor
~~~

32. Cambiamos a la rama black_panther
~~~
a. Editamos el fichero y escribimos: “30. Black Panther: Wakanda Forever
(2025)"
b. Confirmamos los cambios “Película 30” y mezclamos con marvel.
git checkout black_panther
git rebase marvel
nano filmografia.txt
git add .
git commit -m “Película 30”
git checkout marvel
git merge black_panther
~~~

