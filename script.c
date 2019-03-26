#include <time.h>   // Директива нужна для инициализации функции time()
#include <stdio.h>  // Включаем поддержку функций ввода/вывода
#include <stdlib.h> // А это — для поддержки функции rand()

// Главная функция. Именно она и запускается при старте сценария.
int main(void) {
  // инициализируем генератор случайных чисел
  int num;
  time_t t;
  srand(time(&t));
  // в num записывается случайное число от 0 до 9
  num = rand() % 10;
  printf("<!DOCTYPE html>");
  printf("<html>");
  printf("<head>");
  printf("<title>Elias Goss CGI</title><meta charset='utf-8'>");
  printf("</head>");
  printf("<body>");
  printf("<h1>Вас приветствует Elias Goss!</h1>");
  printf("<p>Случайное число в диапазоне 0-9: %d</p>", num);
  printf("</body>");
  printf("</html>");
}
