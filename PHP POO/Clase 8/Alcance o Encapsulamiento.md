Alcance (principio de ocultacion o encapsulamiento): Define dónde y cómo se pueden usar las variables (local o global). Controla qué partes del programa tienen acceso a ellas.

Encapsulamiento: Protege los datos dentro de una clase, permitiendo acceder o modificar atributos solo a través de métodos específicos.

En PHP, public, protected y private son palabras clave que se utilizan para definir la visibilidad de las propiedades y métodos dentro de una clase. Estas determinan desde dónde se pueden acceder a estos elementos. Aquí te explico cada uno:

public: Los métodos o propiedades declarados como public son accesibles desde cualquier lugar. Esto significa que se pueden utilizar tanto dentro como fuera de la clase en la que se definieron.

protected: Los métodos o propiedades declarados como protected solo son accesibles desde dentro de la misma clase o por clases que hereden de esa clase. No se pueden usar desde fuera de la clase.

private: Los métodos o propiedades declarados como private solo son accesibles desde dentro de la misma clase en la que se declararon. No se pueden utilizar desde clases que hereden de esta.