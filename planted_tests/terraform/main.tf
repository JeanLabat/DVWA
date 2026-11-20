# PLANTED BUG 4a: security group open to the whole internet on SSH and all ports.
# Test file only. It is never applied.

resource "aws_security_group" "open_to_world" {
  name        = "open-to-world"
  description = "Deliberately insecure test group"

  ingress {
    from_port   = 22
    to_port     = 22
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }

  ingress {
    from_port   = 0
    to_port     = 65535
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

resource "aws_s3_bucket" "public_bucket" {
  bucket = "planted-test-public-bucket"
  acl    = "public-read"
}
