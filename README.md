# Starcorp Challenge - Backend Developer

## Running

Build it:
`docker build -t my-php-app .`

Run it:
`docker run -p 8080:80 -d my-php-app`

Then open up [localhost:8080](http://localhost:8080).

# The challenge

```
Using SOLID principles, write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print “StarCorp”. For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print “StarCorpianos”.


But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.
```

## Requirements

- 1 if

- You can't use `else`, `else if` or ternary

- Unit tests

- You can write the challenge in any language you want. Here at StarCorp we are big fans of PHP, Kotlin, .Net C# and TypeScript
