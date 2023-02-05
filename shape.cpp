#include <iostream>
using namespace std;
int main() {
  int e = 1, l = 0;
  cin >> l;
  for (int i = 1; i <= l; i++) {
    for (int j = l - 1; j >= i; j--) {
      cout << " ";
    }
    for (int z = 1; z <= e; z++) {
      cout << "*";
    }
    cout << endl;
    e += 2;
  }
}
