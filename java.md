java-boilerplate
================

pom.xml

```xml
<?xml version="1.0" encoding="UTF-8"?>
<project xmlns="http://maven.apache.org/POM/4.0.0"
         xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/xsd/maven-4.0.0.xsd">
    <modelVersion>4.0.0</modelVersion>

    <groupId>me.urakozz</groupId>
    <artifactId>classReference</artifactId>
    <version>1.0-SNAPSHOT</version>

    <build>
        <plugins>
            <plugin>
                <groupId>org.apache.maven.plugins</groupId>
                <artifactId>maven-compiler-plugin</artifactId>
                <version>3.1</version>
            </plugin>
        </plugins>
    </build>

</project>
```

spring pom.xml

```
<project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 http://maven.apache.org/maven-v4_0_0.xsd">
  <modelVersion>4.0.0</modelVersion>
  <groupId>urakozz</groupId>
  <artifactId>SpringExample</artifactId>
  <packaging>jar</packaging>
  <version>0.1.0</version>
  <name>SpringExample</name>
  <url>http://maven.apache.org</url>

  <properties>
    <start-class>urakozz.Application</start-class>
    <spring.version>4.0.5.RELEASE</spring.version>
    <java.version>1.8</java.version>
  </properties>

  <parent>
    <groupId>org.springframework.boot</groupId>
    <artifactId>spring-boot-starter-parent</artifactId>
    <version>1.1.4.RELEASE</version>
  </parent>

  <dependencies>

    <dependency>
      <groupId>org.springframework.boot</groupId>
      <artifactId>spring-boot-starter-web</artifactId>
    </dependency>
    <dependency>
      <groupId>org.springframework.boot</groupId>
      <artifactId>spring-boot-starter-data-mongodb</artifactId>
    </dependency>

  </dependencies>

  <build>
    <plugins>
      <plugin>
        <groupId>org.springframework.boot</groupId>
        <artifactId>spring-boot-maven-plugin</artifactId>
      </plugin>
    </plugins>
  </build>

  <repositories>
    <repository>
      <id>spring-releases</id>
      <url>http://repo.spring.io/libs-release</url>
    </repository>
  </repositories>

  <pluginRepositories>
    <pluginRepository>
      <id>spring-releases</id>
      <url>http://repo.spring.io/libs-release</url>
    </pluginRepository>
  </pluginRepositories>

</project>

```


```brew install maven31```

compile

```mvn compile exec:java -Dexec.mainClass=App ```

```
/usr/libexec/java_home -V
export JAVA_HOME=/Library/Java/JavaVirtualMachines/jdk1.8.0_25.jdk/Contents/Home
```
