#include <iostream>
using namespace std;
int main() {

  int num;
  cin >> num;
  while (num > 200) {
    cout << "Flop on you, Plz enter number less than 200:\n";
    cin >> num;
  }

  for (int i = 0; i < num; i++) {
    if ((i % 8 == 0) || ((i % 4 == 0) && (i % 3 == 0))) {
      cout << i << endl;
    }
  }

  return 0;
}
