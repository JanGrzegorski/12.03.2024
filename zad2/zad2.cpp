#include <iostream>
using namespace std;

class Gady {
private:
	string name;

public:
	Gady(string n) {
		this->name = n;
	}
	void prezentacjaGadów() {
		cout << "Prezentacja gadów: " << this->name << endl;
	}
};
class Krokodyl : public Gady {
private:
	string marka;
	string nazwa;
public:
	Krokodyl(string m, string n) :Gady(n) {
		this->marka = m;
		this->nazwa = n;
	}
	void prezentacjaKrokodyla() {
		cout << "Prezentacja Krokodyla: " << this->marka << endl;
		cout << "Nazwa Gada: " << this->nazwa << endl;
	}
};

int main()
{
	Krokodyl vw = Krokodyl("Aligator", "Kajman","Nilowy");
	vw.prezentacjaGadów();
	vw.prezentacjaKrokodyla();


	return EXIT_SUCCESS;
}
