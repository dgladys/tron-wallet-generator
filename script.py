from tronpy import Tron, Contract
from tronpy.keys import PrivateKey
import json 
 
private_key = PrivateKey.random()
public_key = private_key.public_key.to_base58check_address()

print(json.dumps({
    "public": public_key,
    "private": str(private_key)
}))