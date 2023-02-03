#include <iostream>
using namespace std;
int main() {

  double dollar = 1.65;
  double euro;
  cin >> euro;
  double result;
  while (euro--) {
    result += dollar;
  }
  cout << result;
  return 0;
}
