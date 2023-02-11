#include <iostream>
using namespace std;
int main() {

  int num[7], odd = 0, even = 0;
  bool flop = true;
  for (int i = 0; i < 7; i++) {
    cin >> num[i];
  }
  for (int i = 0; i < 6; i++) {
    if (num[i] % 2 == 0 && flop == true) {
      odd += num[i + 1];
      flop = false;
    } else {
      even += num[i + 1];
      flop = true;
    }
  }

  cout << "odd: " << (odd) / 3 << endl;
  cout << "even: " << (even) / 3 << endl;

  return 0;
}
