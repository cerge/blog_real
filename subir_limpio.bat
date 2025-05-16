@echo off
REM ==== CONFIGURÁ ESTAS VARIABLES ====
set "REPO_URL=https://github.com/cerge/blog_real.git"
set "RAMA=main"
REM ====================================

echo === Limpiando repositorio existente...
rmdir /s /q .git

echo === Iniciando nuevo repositorio...
git init
git branch -m %RAMA%
git remote add origin %REPO_URL%

echo === Eliminando posible submodulo accidental en 'blog_real'...
rmdir /s /q blog_real\.git

echo === Añadiendo archivos y preparando commit...
git add .
git commit -m "Subida limpia del proyecto"

echo === Subiendo al repositorio remoto...
git push -u origin %RAMA%

echo === ¡Listo! Proyecto subido con éxito.
pause
