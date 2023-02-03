#include <iostream>
using namespace std;
int main() {

  string name;
  cin >> name;

  for (int i = 0; i < name.length(); i++) {
    cout << name[i] << "*";
  }
  cout << endl;
  return 0;
}
