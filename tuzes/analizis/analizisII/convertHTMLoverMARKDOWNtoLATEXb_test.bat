pandoc test.html -o test.md
pandoc -f markdown+header_attributes+auto_identifiers+ascii_identifiers --filter pandoc-latex-environment test.md -o test.tex