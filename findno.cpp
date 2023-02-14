#include <iostream>
using namespace std;
int main() {
  string number;
  getline(cin, number);

  for (int i = 0; i < number.length(); i++) {
    if (number[i] == 'N' && number[i + 1] == 'O' && number[i + 2] == ' ')
      cout << number[i] << number[i + 1] << " ";

    if (number[i] == 'o' && number[i + 1] == 'N' && number[i + 2] == ' ')
      cout << number[i] << number[i + 1] << " ";

    if (number[i] == 'n' && number[i + 1] == 'o' && number[i + 2] == ' ')
      cout << number[i] << number[i + 1] << " " << endl;
  }
  return 0;
}
